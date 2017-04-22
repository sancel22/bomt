<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(TransactionRequest $request)
    {
        $credits = (new Credit)->getCredits();
        $amount = $request->input('amount');

        if ($credits < (int) $amount) {
            $request->session()->flash('error', "Sorry Your do not have credits to proceed with this transaction");
            return redirect()->back();
        }

        $request->user()->credits()->create([
            'amount' => $amount * -1,
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
               'amount' => $amount,
               'memo' => $request->input('message')
           ]
       );
        $request->session()->flash('success', 'Successfully Sent');
        return redirect()->back();
    }
}
