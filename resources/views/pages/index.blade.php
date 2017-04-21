@extends('layout')

@section('content')
    <div class="col-md-3">
        @include('pages.login')
    </div>

    <div class="col-md-7">
        <div class="panel panel-default" style="height:875px;">
            <img src="{{URL::asset('/images/bibo-front.png')}}"
                 style="width: 100%; height:800px; border: 0px solid; border-color: #3097d1 #3097d1"/>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel panel-default">
            <img src="{{URL::asset('/images/remittance.png')}}"
                 style="border: 10px solid; border-color: indianred gainsboro; width:100%;"/>
        </div>
    </div>
@stop
