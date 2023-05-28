<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Pagination\Paginator;


class GenreController extends Controller
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

        // ジャンル一覧
        $genres = Genre::paginate(5);

        return view('admin/admin-genre-index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $app_status = GameAppStatus::asSelectArray();

//        return view('admin/admin-app-create', compact('app_status'));
        return view('admin/admin-genre-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre = new Genre;
        $genre->genre_name = $request->genre_name;
        $genre->color_code = $request->color_code;
        $genre->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin-genre.index')->with('message', '登録しました');
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
        $genre = Genre::find($id);

        return view('admin/admin-genre-edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
//        $genre->fill($request->all())->save();

        if ($request->has('genre_name')) {
            $genre->genre_name = $request->genre_name;
        }
        if ($request->has('color_code')) {
            $genre->color_code = $request->color_code;
        }

        $genre->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('admin-genre.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Genre::where('id', $id)->delete();

        // 完了メッセージを表示
        return redirect()->route('admin-genre.index')->with('message', '削除しました');
    }
}
