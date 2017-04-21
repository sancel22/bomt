@extends('layout')


@section('content')
<style>
    #debit, #credit {
        display: none;
    }
</style>
<div class="panel panel-primary">
    <div class="panel-heading"> Top Up Credit </div>
    <div class="panel-body"> 
        @include('errors')
        <form role="form" action="{{ route('save-top-up') }}" method='post'>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="amount"> Amount </label>
                <input type="text" name="amount" class="form-control" id="amount" />
            </div>
            <div class="form-group">
                <label for="payment_type" >Payment Type</label>
                <select class="form-control" data-style="btn-info" id="payment_type" name="payment_type">
                  <option value="select">Select Payment</option>
                  <option value="debit">Debit Card</option>
                  <option value="credit">Credit Card</option>
                </select>
            </div>
            <div id="debit">
                <div class="form-group">
                    <label for="select_debit"> Payment Options</label>
                    <select id="select_debit" class="form-control" name="debit_card">
                        <option value="select"> Select Bank </option>
                        <option value="bpieol"> BPI Express Online </option>
                        <option value="bpiotc"> BPI OTC </option>
                        <option value="bdoib"> BDO Internet Banking </option>
                        <option value="bdootc">BDO OTC</option>
                        <option value="bdoatm">BDO ATM</option>
                        <option value="md">MetroBank Direct</option>
                        <option value="me">MetroBank</option>
                    </select>
                </div>
                    <p class="help-box">Process via DragonPay</p>
            </div>
            <div id="credit">
                <div class="form-group">
                    <label for="card_name">Card Name </label>
                    <input type="text" id="card_name" name="card_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="card_number">Card Number </label>
                    <input type="text" id="card_number" name="card_number" class="form-control" />
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-md-7">
                        <label for="expiry">Expiry(mm/yy)</label>
                        <input type="text" name="card_number" id="expiry" class="form-control" />
                    </div>
                    <div class="col-md-5">
                        <label for="ccv">CCV</label>
                        <input type="text" id="ccv" name="ccv" class="form-control" />
                    </div>
                    </div>
                </div>
                    <p class="help-box">Process via Stripe</p>
            </div>
            <button type="submit" class="btn btn-success">
                Submit
            </button>
        </form>
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
