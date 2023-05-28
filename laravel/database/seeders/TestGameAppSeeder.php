<?php

namespace Database\Seeders;

use App\Models\GameApp;
use Illuminate\Database\Seeder;

class TestGameAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameApp::factory(1)->create();
    }
}
