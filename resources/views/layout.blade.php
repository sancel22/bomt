<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
        body {
            margin-top: 70px;
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-fixed-top navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">BIBO ON CaRe</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="#about">Guide</a></li>
                <li><a href="#contact">Faq</a></li>
                <li><a href="#contact">Help</a></li>
              </ul>
            </div><!-- /.nav-collapse -->
          </div><!-- /.container -->
        </nav>
        <div class="col-md-8 col-md-offset-2">
<div class="col-md-3 sidebar">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }}</div>

                    <div class="panel-body">
                        <b>Credit:</b> 1000 <br>
                        <b>Contact Number:</b> --- <br>
                        <b>Email:</b> {{ Auth::user()->email }}
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"> Menu </div>
                    <div class="panel-body">
                        <ul class="nav nav-sidebar">
                            <li><a href="{{route('topup')}}">Top Up</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Notification</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    @yield('footer_includes')
    </body>
</html>
