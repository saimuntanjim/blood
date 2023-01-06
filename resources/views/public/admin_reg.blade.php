@extends('welcome')
@section('content')
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Admin Registration</h2>
                <p>Registration form for admin.</p>
            </div>
            <form action="/admin-save" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label><input class="form-control" type="text" name="an">
                </div>
                <div class="form-group">
                    <label>Email</label><input class="form-control" type="text" name="ae">
                </div>
                <div class="form-group">
                    <label>Address</label><input class="form-control" type="text" name="aa">
                </div>
                <div class="form-group">
                    <label>Password</label><input class="form-control" type="password" name="ap">
                </div>
                <div class="form-group">
                    <label>Phone</label><input class="form-control" type="text" name="aph">
                </div>
                    <button class="btn btn-primary btn-block" type="Submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection