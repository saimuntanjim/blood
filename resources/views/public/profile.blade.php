@extends('welcome')
@section('content')
<div class="container emp-profile">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('frontend/assets/img/person-logo-png.jpg')}}" width="150" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{Session::get('name')}}
                                    </h5>
                                    <h6>
                                        {{Session::get('designation')}}
                                    </h6>
                                    <p class="proile-rating">Sheba Blood Donation Website</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                       <a  class="profile-edit-btn" href="{{URL::to('/edit-profile/'.Session::get('user_id'))}}" style="background-color:grey;border-radius:10px; color:white;text-decoration:none;"> Edit Profile</a>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="tab-content profile-tab" id="myTabContent" style="padding-left:400px;">
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
                                        <p>{{Session::get('phone')}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Age</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{Session::get('Age')}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Blood Group</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{Session::get('blood')}}</p>
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
                                
                        <form class="form-horizontal" action="{{URL::to('/create-post/'.Session::get('user_id'))}}" method="post">
				          {{csrf_field()}}
						  <fieldset>
							  <div class="controls">
								<input type="hidden" class="input-xlarge" name="user_id" value="{{Session::get('user_id')}}" required="">
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Subject</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="subject" required="">
							  </div>
							</div>      
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Write Your Post</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" name="pd" rows="5" required=""></textarea>
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
							<div class="form-actions">
							  <button type="/save-category" class="btn btn-primary">Create Post</button>
							</div>
						  </fieldset>
						</form>  
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Your Post</label>
                                         </div>
                                         <?php 
                                            $post_info=DB::table('tbl_post')
                                                  ->join('tbl_user','tbl_post.user_id','=','tbl_user.user_id')
                                                  ->select('tbl_user.user_name','tbl_post.*')
                                                  ->where('tbl_user.user_id',Session::get('user_id'))
                                                  ->orderby('tbl_post.post_id','ASC')
                                                  ->get();
                                            foreach ($post_info as $p_info) {
                                             ?>
                                         <div class="faq-item" style="background-color: lightgrey;padding: 5px;border-radius:15px;margin-top:15px;">
                                            <h4 class="name" style="padding-left: 15px;color: green;">{{$p_info->post_subject}}</h4>
                                            <div class="problem" style="padding: 10px;">
                                                <p style="margin:0px;">{{$p_info->post_description}}</p>
                                                <div style="padding-top: 20px;"><p style="color: black;">sent-by <a href="#" style="text-decoration: none;"><span style="color: red;">{{$p_info->user_name}}</span></a>  
                                                    Date:{{date('F j,Y',strtotime($p_info->created_at))}}  Time:{{date('H: i',strtotime($p_info->created_at))}}
                                                </p>
                                                </div>
                                            </div>
                                         </div>  
                                         <?php } ?>
                                     </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
        </div>
@endsection