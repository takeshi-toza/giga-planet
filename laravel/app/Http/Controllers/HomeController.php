<?php

namespace App\Http\Controllers;

use App\Models\GameApp;
use App\Models\Screenshot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * サイトのトップページを表示
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        $message = 'TEST';
//        return view('index', compact('message'));

        // アプリ一覧
        $all_apps = GameApp::with('genre')->orderBy('id', 'desc')->get();

        $release_apps = GameApp::where('status', '=', 1)->orderBy('id', 'desc')->get();
//        $release_apps = GameApp::with('screenshots')->where('status', '=', 1)->orderBy('id', 'desc')->get();

//        $test = GameApp::with(['genre', 'screenshot'])->get();

        return view('index', compact('all_apps', 'release_apps'));
    }
}
