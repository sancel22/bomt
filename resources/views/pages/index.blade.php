@extends('home')

@section('content')
    <div class="col-md-8">
        <div class="panel panel-default" style="height:875px;">
            <img src="{{URL::asset('/images/bibo-front.png')}}"
                 style="width: 100%; height:800px; border: 0px solid; border-color: #3097d1 #3097d1"/>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <img src="{{URL::asset('/images/remittance.png')}}"
                 style="border: 10px solid; border-color: indianred gainsboro; width:100%;"/>
        </div>
    </div>
@stop
