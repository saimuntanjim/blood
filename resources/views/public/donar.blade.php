@extends('welcome')
@section('content')
<main class="page">
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Donars</h2>
                <p>All the donar name, blood group and city are provided here.</p>
            </div>
            <?php 
               foreach ($donor_info as $d_info) {
             ?>
            <?php
             $user_id=Session::get('user_id'); 
            if ($user_id){
             ?>
            <div class="col-md-12">
                <h3>Do you want to be a blood donar..?</h3>
                <form action="{{URL::to('/change-designation/'.Session::get('user_id'))}}" method="post">
                 {{csrf_field()}}
                <div class="form-group">
                   <input class="form-control" type="hidden" name="ud" value="Donar">
                </div>   
                <button class="btn btn-primary btn-block col-md-2" type="Submit">Sure</button>
                </form>
            </div>
            <?php }elseif($user_id && $d_info->user_designation=="Donar"){ ?>
            <h3>Welcome Donar</h3>
            <?php }?>
            <p class="alert-success">
                 <?php
                     $message=Session::get('message');
                     if ($message) {
                        echo $message;
                        Session::put('message',null);
                     }
                   ?>
            </p>
            <div class="block-heading" style="margin:0px;padding-top:4px;">
                <div class="form-group pull-right">
                    <input type="text" class="search form-control" placeholder="What you looking for?">
                </div>
                <span class="counter pull-right"></span>
                <table class="table table-hover table-bordered results">
                    <thead>
                        <tr>
                            <th>Donor ID</th>
                            <th class="col-md-5 col-xs-5">Name / Surname</th>
                            <th class="col-md-4 col-xs-4">Blood</th>
                            <th class="col-md-3 col-xs-3">City</th>
                            <th class="col-md-3 col-xs-3">Phone</th>
                            <th class="col-md-3 col-xs-3">Email</th>
                            <th class="col-md-3 col-xs-3">last Donate date</th>
                        </tr>
                        <tr class="warning no-result">
                            <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$d_info->user_id}}</th>
                            <td>{{$d_info->user_name}}</td>
                            <td>{{$d_info->user_blood_group}}</td>
                            <td>{{$d_info->user_address}}</td>
                            <td>{{$d_info->user_phone}}</td>
                            <td>{{$d_info->user_email}}</td>
                            <td>{{$d_info->donate_date}}</td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="text-info"></h2>
                <p></p>
            </div>
        <?php } ?>
        </div>
    </section>
</main>
@endsection