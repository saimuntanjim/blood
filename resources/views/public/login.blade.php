@extends('welcome')
@section('content')
    <main class="page login-page">
            <section class="clean-block clean-form dark">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">Log In</h2>
                        <p>Login form for user(also for donar)</p>
                    </div>
                    <form action="/user-login" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="email">Email</label><input class="form-control item" type="text" id="email" name="ue">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label><input class="form-control" type="password" id="password" name="up">
                        </div>
                        <div><button class="btn btn-primary btn-block" type="submit">Log In</button>
                        </div>
                        </form>
                    <p class="alert-danger" style="texxt-align:center;">
                 <?php
                     $message=Session::get('message');
                     if ($message) {
                        echo $message;
                        Session::put('message',null);
                     }
                   ?>
            </p>
                  <h4 style="padding-top: 15px;"><a style="text-decoration: none;" href="/registration-form">Don't have account..! Please <span style="color: red;">Sign Up.</span></a></h4>      
            </section> 
    </main>
@endsection