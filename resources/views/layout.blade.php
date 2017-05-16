<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Sample</title>
    <script src="/js/app.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <style>
        body {
            margin-top: 70px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">BIBO On CaRe</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">Guide</a></li>
                <li><a href="#contact">Faq</a></li>
                <li><a href="#contact">Help</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="col-md-8 col-md-offset-2">
    <div class="col-md-3 sidebar">
        @if(Auth::check())
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if (Auth::check())
                        {{ Auth::user()->name  }}
                    @endif
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" style="margin-left: 85px;">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </div>

                <div class="panel-body">
                    <b>Credit:</b> {{ money_format('%i', $credit) }} <br>
                    <b>Contact Number:</b> --- <br>
                    <b>Email:</b>
                    @if(Auth::check())
                        {{ Auth::user()->email }}
                    @endif
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"> Menu</div>
                <div class="panel-body">
                    <ul class="nav nav-sidebar">
                        <li><a href="/">Send Money</a></li>
                        <li><a href="{{route('topup')}}">Top Up</a></li>
                        <li><a href="{{route('user-transaction-history')}}">History</a></li>
                        <li><a href="#">Notification</a></li>
                    </ul>
                </div>
            </div>
        @endif
    </div>
    <div class="col-md-9">
        @yield('content')
    </div>
</div>
<script>
$(function(){

var autoClosingAlert = function(selector, delay) {
   var alert = $('.alert').alert();
   window.setTimeout(function() { alert.slideUp() }, delay);
}
autoClosingAlert('alert', 2000);
});

</script>
@yield('footer_includes')
</body>
</html>
