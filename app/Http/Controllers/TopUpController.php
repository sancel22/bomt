<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopUpController extends Controller
{
    public function index()
    {
        return view('topup.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'payment_type' => 'not_in:select',
            'amount' => 'required',
        ]);
        $request->user()->credits()->create([
            'amount' => $request->input('amount'),
            'payment_code' => $this->stringCode()
        ]);

        $request->session()->flash('success', 'Successfully Added');
        return redirect('/');
    }

    private function stringCode($length = 10)
    {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
