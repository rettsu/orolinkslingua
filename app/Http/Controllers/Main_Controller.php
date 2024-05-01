<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\Login_Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Main_Controller extends Controller
{
    public function index()
    {
        return view('main.welcome');
    }

    public function about()
    {
        return view('main.about');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function faq()
    {
        return view('main.faq');
    }

    public function pagenotfound()
    {
        return  view('pagenotfound');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            "username" => "required",
            "password" => "required"
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route(name: 'login'));
    }
}
