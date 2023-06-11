<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ScreenOrientation;
use App\Http\Controllers\Controller;
use App\Http\Requests\GameAppRequest;
use App\Models\GameApp;
use App\Models\Genre;
use App\Enums\GameAppStatus;
use Exception;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GameAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Bootstrapページネーション
        Paginator::useBootstrap();

        // アプリ一覧
//        $apps = GameApp::all();
        // ページネーション
        $apps = GameApp::paginate(5);

        return view('admin/admin-app-index', compact('apps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $app_status = GameAppStatus::asSelectArray();

        $screen_orientation = ScreenOrientation::asSelectArray();

        // ジャンル一覧
        $genres = Genre::all();

        return view('admin/admin-app-create', compact('app_status', 'screen_orientation', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameAppRequest $request)
    {
//        dd($request->all());

        $screenshots = [];

        // アップロードしたファイル名をつけて保存
        $file_name = $request->file('main_image')->getClientOriginalName();
        $request->file('main_image')->storeAs('public/' . $request->app_id, $file_name);
        $main_image_path = '/storage/' . $request->app_id . '/' . $file_name;

        if ($request->hasfile('sub_image')) {
            $file_name = $request->file('sub_image')->getClientOriginalName();
            $request->file('sub_image')->storeAs('public/' . $request->app_id, $file_name);
            $sub_image_path = '/storage/' . $request->app_id . '/' . $file_name;
        }

        $file_name = $request->file('icon')->getClientOriginalName();
        $request->file('icon')->storeAs('public/' . $request->app_id, $file_name);
        $icon_path = '/storage/' . $request->app_id . '/' . $file_name;

        if ($request->hasfile('screenshot')) {
            $screenshot_files = $request->file('screenshot');
            foreach($screenshot_files as $screenshot){
                $file_name = $screenshot->getClientOriginalName();
                $screenshot->storeAS('public/' . $request->app_id, $file_name);
                $screenshots[]['screenshot'] = '/storage/' . $request->app_id . '/' . $file_name;
            }
        }

        DB::beginTransaction();
        try {
            $app = new GameApp;
            $app->app_id = $request->app_id;
            $app->title = $request->title;
            $app->introduction = $request->introduction;
            $app->short_title = $request->short_title;
            $app->short_introduction = $request->short_introduction;
            $app->status = $request->status;
            if ($request->has('genre_id')) {
                $app->genre_id = $request->genre_id;
            }
            if ($request->has('screen_orientation')) {
                $app->screen_orientation = $request->screen_orientation;
            }
            if (!empty($main_image_path)) {
                $app->main_image = $main_image_path;
            }
            if (!empty($sub_image_path)) {
                $app->sub_image = $sub_image_path;
            }
            if (!empty($icon_path)) {
                $app->icon = $icon_path;
            }
            if ($request->has('ios_store_url')) {
                $app->ios_store_url = $request->ios_store_url;
            }
            if ($request->has('android_store_url')) {
                $app->android_store_url = $request->android_store_url;
            }
            if ($request->has('youtube_url')) {
                $app->youtube_url = $request->youtube_url;
            }
            $app->save();
            $app->screenshot()->createMany($screenshots);
            DB::commit();
        } catch(Exception $e) {
            DB::rollback();
        }

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin-app.index')->with('message', '登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $app = GameApp::find($id);
        $app_status = GameAppStatus::asSelectArray();
        $screen_orientation = ScreenOrientation::asSelectArray();
        // ジャンル一覧
        $genres = Genre::all();

        return view('admin/admin-app-edit', compact('app', 'app_status', 'screen_orientation', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GameAppRequest $request, $id)
    {
        $app = GameApp::find($id);
//        $app->fill($request->all())->save();

        $main_image_path = null;
        $icon_path = null;
        $screenshots = [];

        if ($request->hasfile('main_image')) {
            $file_name = $request->file('main_image')->getClientOriginalName();
            $request->file('main_image')->storeAs('public/' . $app->app_id, $file_name);
            $main_image_path = '/storage/' . $app->app_id . '/' . $file_name;
        }

        if ($request->hasfile('sub_image')) {
            $file_name = $request->file('sub_image')->getClientOriginalName();
            $request->file('sub_image')->storeAs('public/' . $app->app_id, $file_name);
            $sub_image_path = '/storage/' . $app->app_id . '/' . $file_name;
        }

        if ($request->hasfile('icon')) {
            $file_name = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->storeAs('public/' . $app->app_id, $file_name);
            $icon_path = '/storage/' . $app->app_id . '/' . $file_name;
        }

        if ($request->hasfile('screenshot')) {
            $screenshot_files = $request->file('screenshot');
            foreach($screenshot_files as $screenshot){
                $file_name = $screenshot->getClientOriginalName();
                $screenshot->storeAS('public/' . $app->app_id, $file_name);
                $screenshots[]['screenshot'] = '/storage/' . $app->app_id . '/' . $file_name;
            }
        }

        DB::beginTransaction();
        try {
            if ($request->has('title')) {
                $app->title = $request->title;
            }
            if ($request->has('introduction')) {
                $app->introduction = $request->introduction;
            }
            if ($request->has('short_title')) {
                $app->short_title = $request->short_title;
            }
            if ($request->has('short_introduction')) {
                $app->short_introduction = $request->short_introduction;
            }
            if ($request->has('status')) {
                $app->status = $request->status;
            }
            if ($request->has('genre_id')) {
                $app->genre_id = $request->genre_id;
            }
            if ($request->has('screen_orientation')) {
                $app->screen_orientation = $request->screen_orientation;
            }
            if (!empty($main_image_path)) {
                $app->main_image = $main_image_path;
            }
            if (!empty($sub_image_path)) {
                $app->sub_image = $sub_image_path;
            }
            if (!empty($icon_path)) {
                $app->icon = $icon_path;
            }
            if ($request->has('ios_store_url')) {
                $app->ios_store_url = $request->ios_store_url;
            }
            if ($request->has('android_store_url')) {
                $app->android_store_url = $request->android_store_url;
            }
            if ($request->has('youtube_url')) {
                $app->youtube_url = $request->youtube_url;
            }
            $app->save();
            $app->screenshot()->createMany($screenshots);
            DB::commit();
        } catch(Exception $e) {
            DB::rollback();
        }

        return redirect()->route('admin-app.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // アプリの画像ディレクトリを削除
        $app = GameApp::find($id);
        Storage::deleteDirectory('public/' . $app->app_id);

        // アプリのデータを削除
        GameApp::where('id', $id)->delete();

        return redirect()->route('admin-app.index')->with('message', '削除しました');
    }
}
