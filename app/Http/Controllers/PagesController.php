<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    public function index()
    {
        if(Auth::check()) {
            return view('pages.dashboard');
        }

        return view('pages.index');
    }
}
