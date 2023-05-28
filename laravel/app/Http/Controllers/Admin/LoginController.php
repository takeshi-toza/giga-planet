<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest:admin')->except('adminLogout', 'adminDashboard');
//    }

    public function adminIndex()
    {
        return view('admin/admin-login');
    }

    /**
     * 認証の試行を処理
     */
    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // ログイン
        if (Auth::guard('admin')->attempt($credentials)) {
            // セッション更新
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        // ログイン失敗
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin/login');
    }

    public function adminDashboard()
    {
        return view('admin/admin-dashboard');
    }
}
