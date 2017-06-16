@extends('home')

@section('content')
    <section id="header">
        <div class="container">
            <div class="col-md-4 col-md-offset-8 login">
                <div class="login-header">Welcome to our services</div>
                <div class="login-content">
                    <p>Easy and trusted for <b>Money Transfer Online</b></p>
                    <button type="button" class="btn btn-transparent col-md-12" data-toggle="modal" data-target="#loginModal"> Login </button>
                    <p class="or clearfix">OR</p>
                    <button type="button" class="btn btn-transparent col-md-12"> Register </button>
                    <button type="button" class="btn btn-transparent col-md-12"> <i class=" fa fa-facebook" ></i> Signin with facebook </button>
                </div>
            </div>
        </div>
    </section>
    <section id="how-it-works">
        <div class="row">
            <div class="container">
                <div class="col-md-4 col-md-offset-4">
                    <h2 class="text-center"> How it works</h2>
                </div>
                <div class="col-md-12 text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus excepturi neque aperiam labore ab! Quo quod nostrum facere ex eius voluptate sit, inventore deleniti sequi laborum fugiat provident magnam delectus.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod placeat, quasi omnis labore, optio repudiandae. Assumenda distinctio laborum, tempora accusamus similique, explicabo dignissimos, perferendis mollitia laboriosam obcaecati dolorum nisi qui.
                </div>
                <br class="form-group">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="/images/step_1.png">
                    </div>
                    <p class="step-title text-center">
                        1. Register and Lockin you transfer
                    </p>
                    <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat tempora eos odio a blanditiis dolor saepe obcaecati nulla voluptas minima! Ipsam accusamus maiores perferendis aliquam temporibus eius aut dolorem in.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="/images/step_2.png">
                    </div>
                    <p class="step-title text-center">
                        2. Select your remitance center
                    </p>
                    <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga deleniti, atque suscipit, neque tempora porro explicabo ducimus corporis molestias aliquid? Dolorum ducimus asperiores, nostrum ipsum enim cupiditate ex nihil!
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="/images/step_3.png">
                    </div>
                    <p class="step-title text-center">
                        Send you funds to your love ones.
                    </p>
                    <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae molestiae odio quos mollitia sed ut vitae, quod veritatis quaerat in, dignissimos magni libero blanditiis dolore dolores quibusdam voluptates possimus accusantium.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="money-is-safe">
        <div class="row">
            <div class="container">
                <div class="col-md-6">
                    <span>safe and secure</span><br>
                    <h2>Your money's in<br> Safe hand with us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet libero quas incidunt aut itaque cumque minima! Ullam optio hic, dolorum maiores nemo, quis minima, placeat voluptate, inventore dolore aspernatur quae.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates soluta dolorum ad dolorem excepturi, eligendi nemo modi voluptatem facere porro delectus, aliquid quaerat quis aliquam, laudantium similique voluptatum, voluptas eveniet!</p>
                </div>
                <div class="col-md-6">
                    <img src="/images/money.png" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <section id="partners">
        <div class="row">
            <div class="container">
                    <h2 class="text-center">Some of our partners</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam saepe odio pariatur, laboriosam obcaecati illo quo similique rerum animi ducimus, recusandae quam alias magni nam iste consequuntur ipsa eligendi illum.</p>

                    <div class="row">
                    <div class="col-md-4"> <img src="/images/express_pay.jpg"  class="img-responsive" /> </div>
                    <div class="col-md-4"> <img src="/images/cebuana.jpg" class="img-responsive"> </div>
                    <div class="col-md-4"><img src="/images/mlhuiller.jpg" class="img-responsive"></div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-md-4"><img src="/images/lbc_express.jpg" class="img-responsive" alt=""></div>
                    <div class="col-md-4"><img src="/images/western_union.jpg" class="img-responsive" alt=""></div>
                    <div class="col-md-4"><img src="/images/palawan_express.jpg" class="img-responsive" alt=""></div>
                    </div>
            </div>
        </div>
    </section>
    <section id="app">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <p class="app-header text-center">Send money on the go? You'll love our app</p>
                <p class="text-center">
                <a href="#"><img src="/images/playstore.png"></a>
                </p>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="col-md-6">
                <p class="menu">
                    <a href="#">Home </a> | <a href="#"> About Us</a> | <a href="#"> Contact Us</a> | <a href="#">FAQ</a>
                </p>
            </div>
            <div class="col-md-6">
                <p class="pull-right">
                    &copy; <?php echo date('Y'); ?> BIBO Online Cash Remitance. All rights reserved.
                </p>
            </div>
        </div>
    </section>


<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
          <div class="input-group">
          <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
              <input type="email" name="email" value="{{old('email')}}" class="form-control" id="inputEmail" placeholder="Email">
          </div>
          <br>
          <div class="input-group">
                <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
          <div class="input-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-skyblueish col-md-12">Get Started</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
@stop
