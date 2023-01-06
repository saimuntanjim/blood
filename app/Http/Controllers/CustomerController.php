<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $data=array();
        $data['user_id']=$request->user_id;
        $data['user_name']=$request->un;
        $data['user_age']=$request->uage;
        $data['user_designation']=$request->ud;
        $data['user_email']=$request->ue;
        $data['user_address']=$request->ua;
        $data['user_password']=$request->up;
        $data['user_con_password']=$request->cp;
        $data['user_blood_group']=$request->bg;
      $data['user_phone']=$request->uph;
      $data['donate_date']=$request->donate_date;

        $user_id=DB::table('tbl_user')
                ->insertGetId($data);
      if($user_id){
         Session::put('name',$request->un);
         Session::put('email',$request->ue);
         Session::put('designation',$request->ud);
         Session::put('user_id',$user_id);
         Session::put('blood',$request->bg);
         Session::put('Age',$request->uage);
         Session::put('phone',$request->uph);
         return Redirect::to('/user-profile');
      }else{
        Session::put('message',"User sign up not done");
        return Redirect::to('/registration-form');
      }        

    }
    public function login_user(Request $request)
    {
      $user_email=$request->ue;
      $user_password=($request->up);
      $result=DB::table('tbl_user')
              ->where('user_email',$user_email)
              ->where('user_password',$user_password)
              ->first();

              if ($result) {
                Session::put('name',$result->user_name);
                Session::put('email',$result->user_email);
                Session::put('user_id',$result->user_id);
                Session::put('designation',$result->user_designation);
                Session::put('blood',$result->user_blood_group);
                Session::put('Age',$result->user_age);
                Session::put('phone',$result->user_phone);
                return Redirect::to('/user-profile');
              }else {
                Session::put('message','Email or password is invalid');
                return Redirect::to('/login-user');
              }
    }

    public function user_profile()
    {
      $this->user_auth();
        return view('public.profile');
    }

    public function user_logout()
    {
      Session::flush();
      return Redirect::to('/');
    }
    
    public function edit_profile($user_id)
    {    
        $user_info=DB::table('tbl_user')
                       ->where('user_id',$user_id)
                       ->first();

        return Redirect::to('/change-profile');
    }
    
    public function user_change()
    {
       $this->user_auth();
         return view('public.edit_user');
    }
    
    public function update_profile(Request $request ,$user_id)
    {
        $data=array();
        $data['user_name']=$request->un;
        $data['user_age']=$request->uage;
        $data['user_email']=$request->ue;
        $data['user_address']=$request->ua;
        $data['user_password']=$request->up;
        $data['user_con_password']=$request->cp;
        $data['user_blood_group']=$request->bg;

        $result=DB::table('tbl_user')
                ->where('user_id',$user_id)
              ->update($data);
        
      if($user_id){
         Session::put('name',$request->un);
         Session::put('phone',$request->ue);
         Session::put('user_id',$user_id);
         Session::put('blood',$request->user_blood_group);
         Session::put('Age',$request->user_age);
         return Redirect::to('/user-profile');
      }
    }

     public function change_designation(Request $request ,$user_id)
     {
       $user_designation=$request->ud;
       DB::table('tbl_user')
             ->where('user_id',$user_id)
             ->update(['user_designation'=>$user_designation]);

       Session::put('message','Now you become a blood donar for this site..!');
       Session::put('designation','Donar');
       return Redirect::to('/donar-view');      
     }

     public function user_auth(){
      $user_id=Session::get('user_id');
      if ($user_id){
        return;
      }else{
      return Redirect::to('/')->send();
      }
    }


}
