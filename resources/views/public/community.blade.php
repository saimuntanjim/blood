@extends('welcome')
@section('content')
<main class="page faq-page">
    <section class="clean-block clean-faq dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info" style="color:rgb(255,9,24);"><strong>Community</strong></h2>
                <p>For helping each other for emergency post.</p>
            </div>
            <?php 
            $post_info=DB::table('tbl_post')
                  ->join('tbl_user','tbl_post.user_id','=','tbl_user.user_id')
                  ->select('tbl_user.user_name','tbl_post.*')
                  ->orderby('tbl_post.post_id','DESC')
                  ->limit(15)
                  ->get();
            foreach ($post_info as $p_info) {
             ?>
            <div class="block-content">
                <div class="faq-item" style="background-color: lightgrey;padding: 5px;border-radius:15px;">
                    <h4 class="name" style="padding-left: 15px;color: green;">{{$p_info->post_subject}}</h4>
                    <div class="problem" style="padding: 10px;">
                        <p style="margin:0px;">{{$p_info->post_description}}</p>
                        <div style="padding-top: 20px;"><p>sent-by <a href="#" style="text-decoration: none;"><span style="color: red;">{{$p_info->user_name}}</span></a>  
                            Date:{{date('F j,Y',strtotime($p_info->created_at))}}  Time:{{date('H: i',strtotime($p_info->created_at))}}
                        </p>
                        </div>
                    </div>
                </div>    
            </div>
            <?php } ?>
        </div>
        <?php 
        if (Session::get('user_id')) {            
         ?>
        <form class="form-horizontal col-md-12" style="padding-left: 80px;" action="{{URL::to('/post-create/'.Session::get('user_id'))}}" method="post">
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
             <?php }else{ ?>
             <h4 style="padding-top: 15px;"><a style="text-decoration: none;" href="/login-user"> To create a post in the community.Please <span style="color: red;">Log In.</span></a></h4> 
             <?php } ?>        
    </section>
</main>
@endsection