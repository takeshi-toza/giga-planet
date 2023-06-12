<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Consts\AdminConst;

class ContactController extends Controller
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

        // お問い合わせ一覧
        $contacts = Contact::paginate(AdminConst::LIST_COUNT);

        return view('admin/admin-contact-index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::where('id', $id)->firstOrFail();

        return view('admin/admin-contact-show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::where('id', $id)->delete();

        // 完了メッセージを表示
        return redirect()->route('admin-contact.index')->with('message', '削除しました');
    }
}
