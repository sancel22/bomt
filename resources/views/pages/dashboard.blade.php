@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Send Money</div>
                    <div class="panel-body">
                        @include('errors.list')
                        <br/>
                        {{--<div class="col-sm-6">--}}
                        {!! Form::open(['id' => 'frm-send-money', 'url' => route('save-send-money-info'), 'method' => 'POST']) !!}
                        {!! Form::hidden('user_id', Auth::user()->id) !!}
                        <label for="basic-url">Remittance Center :</label>
                        <select class="form-control" name="remittance_id">
                            @foreach($remittances as $remittance)
                                <option value="{{ $remittance->id }}">{{ $remittance->name }}</option>
                            @endforeach
                        </select>

                        <br>
                        <label for="basic-url">Amount :</label>

                        <div class="input-group">
                            <span class="input-group-addon">₱</span>
                            <input type="text" name="amount" class="form-control"
                                   aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-addon">.00</span>
                        </div>

                        <br/>
                        <label for="basic-url">Recipient's Name :</label>
                        <input type="text" name="recipient_name" class="form-control">

                        <br/>
                        <label for="basic-url">Recipient's Contact Number :</label>
                        <input type="text" name="contact_number" class="form-control">

                        <br/>
                        <label for="basic-url">Recipient's Address :</label>
                        <input type="text" name="address" class="form-control">

                        <br/>
                        <br/>
                                    <textarea name="memo" class="form-control" id="text" name="text"
                                              placeholder="Type in your message"
                                              rows="5"></textarea>
                        <h6 class="pull-right" id="count_message"></h6>
                        <br/>
                        <button class="btn btn-info" type="submit" id="btn-submit">Send</button>
                        {!! Form::close() !!}
                        {{--</div>--}}
                        {{--<br>--}}

                        {{--<div class="col-sm-1"></div>--}}
                        {{--<div class="col-sm-4 well" style="height: 385px;"></div>--}}
                        {{--<div class="col-sm-1 "></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<button id="opener">open the dialog</button>--}}
    {{--<div id="dialog1" title="Dialog Title" hidden="hidden">I'm a dialog</div>--}}
@endsection
@include ('footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
//        $( function() {
//            $( "#dialog" ).dialog();
//        } );
//
//        $( "#opener" ).on( "click", function() {
//            $( "#dialog" ).dialog( "open" );
//        });
//
//        $('#frm-send-money').submit(function( event ) {
//            var values = $( this ).serializeArray();
//            jQuery.each( values, function( i, field ) {
//                console.log(field.value);
//            });
//
//            event.preventDefault();
//        });
    });
</script>
