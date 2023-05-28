<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Contact;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required',
        ]);

        $inputs = $request->all();

        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required',
        ]);

        // フォームから受け取ったactionの値を取得
        $action = $request->input('action');

        // フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        if ($action !== 'submit') {
            // 戻るボタンの場合は、お問合せ入力フォームにリダイレクト
            return redirect()->route('contact.index')->withInput($inputs);
        } else {
            // DBに保存
            Contact::create([
                'email' => $request->email,
                'title' => $request->title,
                'body' => $request->body,
            ]);

            // 入力されたメールアドレスにメールを送信
//            \Mail::to($inputs['email'])->send(new ContactMail($inputs));
            // 自分にメールを送信
            Mail::to('info@giga-planet.com')->send(new ContactMail($inputs));

            // 再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            return view('contact.complete');
        }
    }
}

