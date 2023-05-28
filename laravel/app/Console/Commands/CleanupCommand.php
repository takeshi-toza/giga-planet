<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CleanupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'バックアップDBのクリーンアップ';

    protected $backup_path;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->backup_path = 'backup';  // 保存先ディレクトリ
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if (!Storage::exists($this->backup_path)) return;

        $files = Storage::files($this->backup_path);
        Storage::delete($files);
    }
}
