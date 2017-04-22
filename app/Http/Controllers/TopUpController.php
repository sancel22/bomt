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
            'amount' => 'required|numeric',
        ]);
        $amount = $request->input('amount');
        $request->user()->credits()->create([
            'amount' => $amount * 100,
            'payment_code' => $this->stringCode()
        ]);

        $request->session()->flash('success', "Thank you for purchasing {$amount} worth of credits");
        return redirect('/');
    }

    private function stringCode($length = 10)
    {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
