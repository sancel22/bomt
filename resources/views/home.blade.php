<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Title</title>
        <script src="/js/app.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
    </head>
    <body>
        <section id="header-menu">
            <nav class="navbar navbar-fixed-top navbar-default">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="/images/logo.png" /></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="#contact">FAQ</a></li>
                  </ul>
                </div><!-- /.nav-collapse -->
              </div><!-- /.container -->
            </nav>
        </section>
        <div class="row">
            <div class="col-md-12">
                    @yield('content')
            </div>
        </div>
    @yield('footer_includes')
    </body>
</html>
