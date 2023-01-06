@extends('welcome')
@section('content')
<div class="container emp-profile">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('/frontend/assets/img/person-logo-png.jpg')}}" width="150" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{Session::get('name')}}
                                    </h5>
                                    <h6>
                                        Admin
                                    </h6>
                                    <p class="proile-rating">Sheba Blood Donation Website</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                       <a  class="profile-edit-btn" href="{{URL::to('/profile-edit/'.Session::get('admin_id'))}}" style="background-color:grey;border-radius:10px; color:white;text-decoration:none;"> Edit Profile</a>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-4">
                        <div class="profile-work">
                            <p>Menu</p>
                            <a href="/all-user" style="text-decoration:none;">All User</a><br/>
                            <a href="/all-donar" style="text-decoration:none;">All Donar</a><br/>
                            <a href="/create-admin" style="text-decoration:none;">Create Admin</a>
                        </div>
                    </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent" style="padding-left:0px;">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{Session::get('name')}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{Session::get('email')}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>0{{Session::get('phone')}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{Session::get('address')}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p style="color:green;">Active</p>
                                    </div>
                                </div>
                            </div>
                        <p class="alert-success">
                         <?php
                             $message=Session::get('message');
                             if ($message) {
                                echo $message;
                                Session::put('message',null);
                             }
                           ?>
                        </p>
                            </div>
                        </div>
                    </div>
                </div> 
@endsection