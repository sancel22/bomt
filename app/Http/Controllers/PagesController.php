<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Credit;

class PagesController extends Controller
{

    public function index()
    {
        if(Auth::check()) {
            return view('pages.dashboard', compact('amount'));
        }

        return view('pages.index');
    }
}
