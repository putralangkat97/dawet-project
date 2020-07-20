<?php

namespace App\Http\Controllers\AuthAdmin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm() {
        return view('auth.admin.login');
    }

    public function loginAdmin(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($credential, $request->member)) {
            return redirect()->intended(route('admin.home'));
        } else {
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
