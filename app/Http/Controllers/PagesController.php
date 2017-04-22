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
            $first = 'Fox';
            $last = 'lazy';

            $people = [
                'Alvie',
                'Alvee',
                'Aisle Bee',
            ];

            $remittances = Remittance::all();

            JavaScript::put([
                'foo' => 'bar',
                'age' => 29
            ]);

            return view('pages.dashboard', compact('remittances'));
        }

        return view('pages.index');
    }


    public function confirm(TransactionRequest $request)
    {
        JavaScript::put(['data' => $request->input()]);
    }

    public function store(TransactionRequest $request)
    {


        $recipient = $request->user()->recipients()->create([
            'full_name' => $request->input('recipients_name'),
            'address' => $request->input('address'),
            'contact_number' => $request->input('contact_number')
        ]);

        $request->user()->transactions()->create(
            [
                'remittance_id' => $request->input('remittance_center'),
                'recipient_id' => $recipient->id,
                'memo' => $request->input('message')
            ]
        );
    }
}
