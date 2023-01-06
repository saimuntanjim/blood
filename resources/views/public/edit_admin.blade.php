@extends('welcome')
@section('content')
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Update Your Information</h2>
            </div>
            <?php 
            
            $admin_info=DB::table('tbl_admin')
                      ->where('admin_id',Session::get('admin_id'))
                      ->first();
            ?>
            <form action="{{URL::to('/profile-update/'.Session::get('admin_id'))}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label><input class="form-control" type="text" value="{{$admin_info->admin_name}}" name="un">
                </div>
                <div class="form-group">
                    <label>Email</label><input class="form-control" type="text" value="{{$admin_info->admin_email}}" name="ue">
                </div>
                <div class="form-group">
                    <label>Address</label><input class="form-control" type="text" value="{{$admin_info->admin_address}}" name="ua">
                </div>
                <div class="form-group">
                    <label>Phone</label><input class="form-control" type="text" value="{{$admin_info->admin_phone}}" name="uph">
                </div>
                <div class="form-group">
                    <label>Password</label><input class="form-control" type="password" value="{{$admin_info->admin_password}}" name="up">
                </div>
                <button class="btn btn-primary btn-block" type="Submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection