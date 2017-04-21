@extends('layout')

@section('content')
    {{--<div class="row1">--}}
    {{--</div>--}}


    <div class="col-md-3">
        @include('pages.login')
    </div>

    {{--<div class="col-md-9">--}}
    <!--divided column into 6/6-->
    <div class="col-md-7">
        {{--<div class="col-md-8">--}}
        <div class="panel panel-default" style="height:875px;">
            <img src="{{URL::asset('/images/bibo-front.png')}}"
                 style="width: 100%; height:800px; border: 0px solid; border-color: #3097d1 #3097d1"/>
        </div>
        {{--</div>--}}
        {{--<div class="col-md-4" style="background-color: pink;">--}}
        {{--<img src="img/2.jpg" style="width: 150px;height: 150px;" class="img-thumbnail"/>--}}
        {{--</div>--}}
        {{--<div class="col-md-4" style="background-color: yellow;">--}}
        {{--<img src="img/2.jpg" style="width: 150px;height: 150px;" class="img-thumbnail"/>--}}
        {{--</div>--}}
    </div>
    <div class="col-md-2">
        <div class="panel panel-default">
            <img src="{{URL::asset('/images/remittance.png')}}" style="border: 10px solid; border-color: #ff0000 #0000ff; width:100%;"/>
        </div>
    </div>
    {{--</div>--}}
@stop
