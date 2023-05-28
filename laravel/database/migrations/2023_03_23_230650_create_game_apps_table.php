<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\GameAppStatus;
use App\Enums\ScreenOrientation;

class CreateGameAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_apps', function (Blueprint $table) {
            $table->id();
            $table->string('app_id', 50)->unique()->comment('アプリID');
            $table->string('title', 100)->comment('タイトル');
            $table->text('introduction')->comment('アプリ紹介');
            $table->string('short_title', 50)->comment('ショートタイトル');
            $table->string('short_introduction', 200)->comment('ショートアプリ紹介');
            $table->tinyInteger('status')->default(GameAppStatus::KEEP)->comment('ステータス 0:非公開、1:公開');
            $table->unsignedBigInteger('genre_id')->nullable()->comment('ジャンルID');
            $table->tinyInteger('screen_orientation')->default(ScreenOrientation::NONE)->comment('画面向き 0:未設定、1:縦画面、2:横画面');
            $table->string('icon', 100)->comment('アイコンパス');
            $table->string('main_image', 100)->comment('メイン画像パス');
            $table->string('sub_image', 100)->nullable()->comment('サブ画像パス');
            $table->string('ios_store_url', 100)->nullable()->comment('iOSストアURL');
            $table->string('android_store_url', 100)->nullable()->comment('AndroidストアURL');
            $table->string('youtube_url', 100)->nullable()->comment('YouTubeURL');
            $table->timestamps();

//            $table->tinyInteger('genre')->default(AppGenre::ACTION)->comment('ジャンル');
//            $table->foreignId('id')->constrained('genres')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('genre_id')->references('id')->on('genres')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_apps');
    }
}
