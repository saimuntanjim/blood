@extends('welcome')
@section('content')
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Update Your Information</h2>
            </div>
            <?php 
            
            $user_info=DB::table('tbl_user')
                      ->where('user_id',Session::get('user_id'))
                      ->first();
            ?>
            <form action="{{URL::to('/update-profile/'.Session::get('user_id'))}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label><input class="form-control" type="text" value="{{$user_info->user_name}}" name="un">
                </div>
                <div class="form-group">
                    <label>Age</label><input class="form-control" type="text" value="{{$user_info->user_age}}" name="uage">
                </div>
                <div class="form-group">
                    <label>Email</label><input class="form-control" type="text" value="{{$user_info->user_email}}" name="ue">
                </div>
                <div class="form-group">
                    <label>Address</label><input class="form-control" type="text" value="{{$user_info->user_address}}" name="ua">
                </div>
                <div class="form-group">
                    <label>Password</label><input class="form-control" type="password" value="{{$user_info->user_password}}" name="up">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label><input class="form-control" type="password" value="{{$user_info->user_con_password}}" name="cp">
                </div>
                <div class="form-group">
                    <label>Blood group</label><textarea class="form-control" name="bg">{{$user_info->user_blood_group}}</textarea>
                </div>
                    <button class="btn btn-primary btn-block" type="Submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection