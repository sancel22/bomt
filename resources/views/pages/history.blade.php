@extends('layout')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">Transaction History</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Remittance Center</th>
                        <th>Amount</th>
                        <th>Recipient Name</th>
                        <th>Recipient Contact Number</th>
                        <th>Address</th>
                        <th>Memo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($rows as $row)
                        <td>{{ $row->transaction_id }}</td>
                        <td>{{ $row->remittance_center }}</td>
                        <td>{{ $row->amount * (-1) }}</td>
                        <td>{{ $row->recipient_name }}</td>
                        <td>{{ $row->contact_number }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->memo }}</td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@section('footer_includes')
    <script>
        $( function() {
            $('#payment_type').on('change', function() {
                var payment_list = ['debit', 'credit'];
                var payment_option = $(this).val();
                $.each(payment_list, function(key, val){
                    if (val == payment_option) {
                        $('#'+val).css('display', 'block');
                    } else {
                        $('#'+val).css('display', 'none');
                    }
                });
            });
        });
    </script>
@stop
