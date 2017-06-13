<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use JavaScript;
use App\Model\Credit;
use App\Model\Remittance;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TransactionRequest;


class PagesController extends Controller
{

    public function index()
    {
        if(Auth::check()) {
            $remittances = Remittance::all();
            return view('pages.dashboard', compact('remittances'));
        }

        return view('pages.index');
    }

    public function remit()
    {
        $remittances = Remittance::all();
        return view('pages.remit', compact('remittances'));
    }

    public function store(TransactionRequest $request)
    {
        $credits = (new Credit)->getCredits();
        $amount = ($request->input('amount')+$request->input('charges'));

        if ($credits < (int) $amount) {
            $request->session()->flash('error', "Sorry Your do not have credits to proceed with this transaction");
            return redirect()->back();
        }

        $credit = $request->user()->credits()->create([
            'amount' => $amount * 100 * -1,
            'payment_code' => 'transfer'
        ]);

        $recipient = $request->user()->recipients()->create([
            'full_name' => $request->input('recipients_name'),
            'address' => $request->input('address'),
            'contact_number' => $request->input('contact_number')
        ]);

        $request->user()->transactions()->create(
            [
                'remittance_id' => $request->input('remittance_center'),
                'recipient_id' => $recipient->id,
                'credit_id' => $credit->id,
                'memo' => $request->input('message'),
                'code' => $this->stringCode()
            ]
        );

        $request->session()->flash('success', 'Successfully Sent');
        return redirect()->back();
    }

    public function history()
    {
        $rows = User::with('transactions', 'transactions.remittance', 'transactions.credit', 'transactions.recipient')->where('id', Auth::user()->id)->first();
        return view('pages.history', compact('rows'));
    }

    private function stringCode($length = 10)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)))), 1, $length);
    }
    public function notifications()
    {
        return view('pages.notifications');
    }

}
