<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreenshotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screenshots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_app_id')->nullable()->comment('ゲームアプリID');
            $table->string('screenshot', 100)->comment('スクリーンショットパス');
            $table->timestamps();

            $table->foreign('game_app_id')->references('id')->on('game_apps')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screenshots');
    }
}
