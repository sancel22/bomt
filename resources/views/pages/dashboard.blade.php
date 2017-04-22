@extends('layout')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading"> Send Money</div>
        <div class="panel-body">
            @include('errors.list')
            @include('flash')
            <div class="form-group">
                <label for="remittance_id">Remittance Center :</label>
                <select class="form-control" name="remittance_id" id="remittance_id">
                    <option value=""> Select One</option>
                    @foreach($remittances as $remittance)
                        <option value="{{ $remittance->id }}">{{ $remittance->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="amount">Amount :</label>

                <div class="input-group">
                    <span class="input-group-addon">₱</span>
                    <input type="text" name="amount" value="{!! old('amount') !!}" id="amount" class="form-control"
                           aria-label="Amount (to the nearest peso)">
                    <span class="input-group-addon">.00</span>
                </div>
            </div>
            <div class="form-group">
                <label for="recipients_name">Recipient's Name :</label>
                <input type="text" id="recipients_name" name="recipients_name" value="{!! old('recipients_name') !!}" class="form-control">
            </div>

            <div class="form-group">
                <label for="contact_number">Recipient's Contact Number :</label>
                <input type="text" id="contact_number" name="contact_number" value="{!! old('contact_number') !!}" class="form-control">
            </div>

            <div class="form-gropup">
                <label for="address">Recipient's Address :</label>
                <input type="text" id="address" name="address" value="{!! old('address') !!}" class="form-control">
            </div>
            <br>

            <div class="form-group">
                <textarea name="memo" class="form-control" value="{!! old('memo') !!}" id="message"
                          placeholder="Type in your short message"
                          rows="5"></textarea>
            </div>
            <button class="btn btn-info" type="button" id="btn-submit">Send</button>
        </div>
    </div>


    <div class="modal fade" id="form-data" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Please check you input.
                    </h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['id' => 'frm-send-money', 'url' => route('save-send-money-info'), 'method' => 'POST']) !!}
                    {!!Form::hidden('remittance_center','', ['class' => 'hremittance_center']) !!}
                    <b>Remitance Center:</b> <span class="sremittance_center"></span><br>
                    {!!Form::hidden('amount','', ['class' => 'hamount']) !!}
                    <b>Amount:</b> <span class="samount"></span><br>
                    {!!Form::hidden('recipients_name','', ['class' => 'hrecipient']) !!}
                    <b>Recipient:</b> <span class="srecipient"></span><br>
                    {!!Form::hidden('contact_number', '', ['class' => 'hcontact_number'] ) !!}
                    <b>Contact Number:</b> <span class="scontact_number"></span><br>
                    {!!Form::hidden('address', '', ['class' => 'haddress'] ) !!}
                    <b>Contact Address:</b> <span class="saddress"></span><br>
                    {!!Form::hidden('message', '', ['class' => 'hmessage'] ) !!}
                    <b>Message:</b> <span class="smessage"></span><br>
                </div>
                <div class="modal-footer">
                    <span class="pull-left"><b>Charge:</b> <span id="charge">100.00</span></span>
                    {!!Form::hidden('charges', '', ['class' => 'hcharges'] ) !!}
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Confirm
                    </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section ('footer_includes')
    <script>
        $(function () {
            $('#btn-submit').on('click', function () {
                var text_remittance = $('#remittance_id').find(':selected').text();
                var val_remittance = $('#remittance_id').val();
                var val_amount = $('#amount').val();
                var val_recipient_name = $('#recipients_name').val();
                var val_contact_number = $('#contact_number').val();
                var val_contact_address = $('#address').val();
                var val_message = $('#message').val();

                $('.hremittance_center').val(val_remittance);

                if ($('#remittance_id').val() === '') {
                    $('.sremittance_center').text('');
                } else {
                    $('.sremittance_center').text(text_remittance);
                }

                $('.hamount').val(val_amount);
                $('.samount').text(formatCurrency(val_amount));

                $('.hrecipient').val(val_recipient_name);
                $('.srecipient').text(val_recipient_name);

                $('.hcontact_number').val(val_contact_number);
                $('.scontact_number').text(val_contact_number);

                $('.haddress').val(val_contact_address);
                $('.saddress').text(val_contact_address);

                $('.hmessage').val(val_message);
                $('.smessage').text(val_message);

                var c = calculateCharges(val_amount);
                $('#charge').text(c);
                $('.hcharges').val(c);
                $('#form-data').modal('show');
            });

            var calculateCharges = function (amount) {
                return formatCurrency(amount * .01);
            };

            var formatCurrency = function(amount) {
                return parseFloat(amount, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString()
            }

        });

    </script>

@endsection
