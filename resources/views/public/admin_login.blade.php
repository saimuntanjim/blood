@extends('welcome')
@section('content')
    <main class="page login-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Admin Log In</h2>
            </div>
            <form action="/admin-panel" method="post">
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
         </section> 
    </main>
@endsection