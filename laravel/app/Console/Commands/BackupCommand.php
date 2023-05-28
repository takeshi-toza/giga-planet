<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class BackupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'DBのバックアップ';

    protected $db_host;
    protected $db_user;
    protected $db_pass;
    protected $db_name;
    protected $backup_path;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->db_host = env('DB_HOST');        // DBホスト
        $this->db_user = env('DB_USERNAME');    // DBユーザ
        $this->db_pass = env('DB_PASSWORD');    // DBパスワード
        $this->db_name = env('DB_DATABASE');    // バックアップ対象スキーマ
        $this->backup_path = storage_path('app/backup');  // 保存先ディレクトリ
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // 出力先のディレクトリがない場合は、ディレクトリを作成
        if (!Storage::exists('backup')) Storage::makeDirectory('backup');

        // ファイル名
        $file_name = sprintf('%s.sql', date('YmdHis'));
        // ファイルフルパス
        $file_path = sprintf('%s/%s', $this->backup_path, $file_name);

        $command = sprintf(
//            'mysqldump --single-transaction -h %s -u %s -p%s %s > %s',
            'mysqldump --single-transaction --skip-column-statistics -h %s -u %s -p%s %s > %s',
            $this->db_host,
            $this->db_user,
            $this->db_pass,
            $this->db_name,
            $file_path
        );

        exec($command, $output, $result_code);
    }
}
