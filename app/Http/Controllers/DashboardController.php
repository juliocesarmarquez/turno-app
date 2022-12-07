<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
// Prevent guest from going to dashboard
    public function __construct()
   {
    $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user()->role->name == 'piloto') {
            return view('home');
        };
        return view('dashboard');
        }
}
