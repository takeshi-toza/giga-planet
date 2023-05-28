<?php

namespace App\Http\Controllers;

use App\Models\GameApp;
use Illuminate\Http\Request;

class GameAppController extends Controller
{
    /**
     * ゲームアプリの詳細を表示
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($app_id)
    {
//        $message = 'GAME';
//
//        return view('game-app', compact('app_id', 'message'));
//        $app = GameApp::find($id);
//        $app = GameApp::where('app_id', $app_id)->firstOrFail();
        $app = GameApp::with(['genre', 'screenshot'])->where('app_id', $app_id)->firstOrFail();
//dd($app->screen_orientation);

        // スクショが横向きで8枚以上の場合は、半分に分割
        if (!empty($app->screen_orientation) && $app->screen_orientation === 2) {
            if (count($app->screenshot) >= 8) {
//                $app['screenshot2'] = array_chunk((array)$app->screenshot, count($app->screenshot) / 2) ;
                $app['screenshot'] = array_chunk($app->screenshot->toArray(), count($app->screenshot) / 2) ;
            }
//            var_dump(count($app->screenshot));
//            var_dump(count($app->screenshot) / 2);
//            dd($app->screenshot);
//            dd($app->screenshot2);
        }

        return view('game-app', compact('app'));
    }
}
