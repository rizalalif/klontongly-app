<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.login', ['title' => 'Login Page']);
    }
    public function register()
    {
        return view('pages.register', ['title' => 'Login Page']);
    }
    public function create(Request $request)
    {
        // dd(request()->all());

        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        // $data = $request->all();
        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        session()->flash('success', 'Register successfully!.');
        return redirect()->route('login');
    }

    public function login(Request $request)
    {

        // dd($request);

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // $validated = $request->validated();

        // $credentials = ['email' => $validated['email'], 'password' => $validated['password']];
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->isAdmin == 1) {
                // dd('admin');
                return redirect('/')->with('title','Dashboard');
            } elseif (Auth::user()->isAdmin == 0) {
                // dd('user');

                return redirect()->intended('/');
            }
            // dd(Auth::user()->isAdmin);
            $request->session()->regenerate();
        }

        return redirect('/login')->with('login-failed', 'Login Failed');



        // return redirect()->route('dashboard');;

        // return view('pages.checkout', ['title' => 'login page']);


        // $user = $request->user();
        // dd($validated);
    }

    public function toDashboard()
    {
        return view('pages.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
