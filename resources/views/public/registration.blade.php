@extends('welcome')
@section('content')
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registration</h2>
                <p>Registration form for user. User can also register as donar(optional).</p>
            </div>
            <form action="/save-user" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label><input class="form-control" type="text" name="un">
                </div>
                <div class="form-group">
                    <label>Age</label><input class="form-control" type="text" name="uage">
                </div>
                 <div class="form-group">
                   <input class="form-control" type="hidden" name="ud" value="User">
                </div>
                <div class="form-group">
                    <label>Email</label><input class="form-control" type="text" name="ue">
                </div>
                <div class="form-group">
                    <label>Address</label><input class="form-control" type="text" name="ua">
                </div>
                <div class="form-group">
                    <label>Password</label><input class="form-control" type="password" name="up">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label><input class="form-control" type="password" name="cp">
                </div>
                <div class="form-group">
                    <label>Blood group</label><textarea class="form-control" name="bg"></textarea>
                </div>
                <div class="form-group">
                    <label>Phone</label><input class="form-control" type="text" name="uph">
                </div>
                <div class="form-group">
                    <label>last blood donate date</label><input class="form-control" type="date" name="donate_date">
                </div>
                    <button class="btn btn-primary btn-block" type="Submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection