<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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
//        $contacts = Contact::all();
        // ページネーション
        $contacts = Contact::paginate(5);

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
}
