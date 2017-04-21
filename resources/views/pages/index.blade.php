@extends('layout')

@section('content')

    <div class="col-md-3">
        @include('pages.login')
    </div>

    <!--divided column into 6/6-->
    <div class="col-md-6">
        {{--<div class="col-md-8">--}}
        <div class="panel panel-default" style="height:875px;">
            <img src="{{URL::asset('/images/bibo-front.png')}}"
                 style="width: 100%; height:875px; border:10px solid;"/>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <img src="{{URL::asset('/images/remittance.png')}}" style="border: 10px solid; width:100%;"/>
        </div>
    </div>
    {{--</div>--}}
@stop
