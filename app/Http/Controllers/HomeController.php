<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('dashboard');
        if (Auth::user()->admin) {
            return redirect()->route('adminDashboard');
        } elseif (Auth::user()->author) {
            return redirect()->route('authorDashboard');
        } else {
            return redirect()->route('userDashboard');
        }
    }
}
