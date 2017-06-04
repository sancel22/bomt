@extends('layout')

@section('content')
    <div class="content-panel">
        <div class="content-panel-heading">Transaction History</div>
        <div class="content-panel-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>SQ</th>
                        <th>Remittance Center</th>
                        <th>Amount</th>
                        <th>Code</th>
                        <th>Recipient Name</th>
                        <th>Recipient Contact Number</th>
                        <th>Address</th>
                        <th>Memo</th>
                        <th>Transaction Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows->transactions as $key => $row)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $row->remittance->first()->name }}</td>
                            <td>{{ ($row->credit->amount/100) * (-1) }}</td>
                            <td>{{ $row->code }}</td>
                            <td>{{ $row->recipient->full_name }}</td>
                            <td>{{ $row->recipient->contact_number }}</td>
                            <td>{{ $row->recipient->address }}</td>
                            <td>{{ $row->memo }}</td>
                            <td>{{ $row->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@section('footer_includes')
@stop
