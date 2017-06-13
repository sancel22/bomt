<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Sample</title>
    <script src="/js/app.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
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
            <a class="navbar-brand" href="/"><img src="/images/logo.png" /></a>
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3 sidebar">
                @if(Auth::check())
                    <div class="box side-panel">
                        <div class="side-panel-heading">
                            <img src="/images/user-image.png">
                            <br>

                            <div class="user-name">
                                @if (Auth::check())
                                    {{ Auth::user()->name  }}
                                @endif
                            </div>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                        <hr>
                        <div class="side-panel-body">
                            <b>Credit:</b> <span class="member-data">{{ money_format('%i', $credit) }}</span> <br>
                            <b>Contact Number:</b><span class="member-data"> 09176595022  </span><br>
                            <b>Email:</b>
                                <span class="member-data">
                                    @if(Auth::check())
                                        {{ Auth::user()->email }}
                                    @endif
                                </span>
                        </div>
                        <hr>
                        <div class="side-panel-footer logout">
                            <span class="glyphicon glyphicon-log-out"></span>
                            <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"">
                                    Logout
                                </a>
                        </div>
                    </div>
                    <div class="menu-panel box">
                        <div class="menu-panel-heading"> Menu</div>
                        <div class="menu-panel-body">
                            <ul class="nav nav-sidebar">
                                <li><a href="/remit">Send Money</a></li>
                                <li><a href="{{route('topup')}}">Top Up</a></li>
                                <li><a href="{{route('user-transaction-history')}}">History</a></li>
                                <li><a href="{{route('notifications')}}">Notification</a></li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
        
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="col-md-12">
            <div class="footer-menu col-md-6">
                    <a href="/">Home</a> |
                    <a href="#">Guide</a> |
                    <a href="#">Faq</a> |
                    <a href="#">Help</a>
                </ul>
            </div>
            <div class="copyright col-md-6">
                <p class="pull-right">
                    &copy;<?php echo date('Y'); ?> BIBO Online Cash Remittance. All Rights Reserves
                </p>
            </div>
        </div>
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
