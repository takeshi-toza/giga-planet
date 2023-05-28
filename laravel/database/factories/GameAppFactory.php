<?php

namespace Database\Factories;

use App\Models\GameApp;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

class GameAppFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GameApp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         // TODO:
        $app_id = 'test6';

        $file_name = $app_id . '_main.png';
        $file = UploadedFile::fake()->image($file_name, 800, 412);
        $file->storeAs("public/{$app_id}/", $file_name);
        $main_image_path = "/storage/{$app_id}/" . $file_name;

        $file_name = $app_id . '_icon.png';
        $file = UploadedFile::fake()->image($file_name, 512, 512);
        $file->storeAs("public/{$app_id}/", $file_name);
        $icon_path = "/storage/{$app_id}/" . $file_name;

        return [
//            $table->string('app_id')->unique()->comment('アプリID');
//            $table->string('title')->comment('タイトル');
//            $table->string('short_title')->nullable()->comment('ショートタイトル');
//            $table->text('detail')->nullable()->comment('詳細');
//            $table->integer('status')->default(1)->comment('ステータス 1:公開、2:非公開');
//            $table->string('main_image')->comment('メイン画像');
//            $table->string('sub_image')->nullable()->comment('サブ画像');
//            $table->string('icon')->comment('アイコン');
//            $table->string('screenshot_1')->nullable()->comment('スクリーンショット１');
//            $table->string('screenshot_2')->nullable()->comment('スクリーンショット２');
//            $table->string('screenshot_3')->nullable()->comment('スクリーンショット３');
//            $table->string('screenshot_4')->nullable()->comment('スクリーンショット４');
//            $table->string('screenshot_5')->nullable()->comment('スクリーンショット５');
//            $table->string('screenshot_6')->nullable()->comment('スクリーンショット６');
//            $table->string('screenshot_7')->nullable()->comment('スクリーンショット７');
//            $table->string('screenshot_8')->nullable()->comment('スクリーンショット８');
//            $table->string('screenshot_9')->nullable()->comment('スクリーンショット９');
//            $table->string('screenshot_10')->nullable()->comment('スクリーンショット１０');
//            $table->string('screenshot_11')->nullable()->comment('スクリーンショット１１');
//            $table->string('screenshot_12')->nullable()->comment('スクリーンショット１２');
//            $table->string('ios_store_url')->nullable()->comment('iOSストアURL');
//            $table->string('android_store_url')->nullable()->comment('AndroidストアURL');
            'app_id' => $app_id,
            'title' => $this->faker->realText(20),
            'short_title' => $this->faker->realText(10),
            'detail' => $this->faker->realText(50),
            'main_image' => $main_image_path,
//            'sub_image' => $this->faker->name,
            'icon' => $icon_path,
//            'screenshot_1' => $this->faker->name,
//            'screenshot_2' => $this->faker->name,
//            'screenshot_3' => $this->faker->name,
//            'screenshot_4' => $this->faker->name,
//            'screenshot_5' => $this->faker->name,
//            'screenshot_6' => $this->faker->name,
//            'screenshot_7' => $this->faker->name,
//            'screenshot_8' => $this->faker->name,
//            'screenshot_9' => $this->faker->name,
//            'screenshot_10' => $this->faker->name,
//            'screenshot_11' => $this->faker->name,
//            'screenshot_12' => $this->faker->name,
//            'ios_store_url' => $this->faker->name,
//            'android_store_url' => $this->faker->name,
        ];
    }
}
