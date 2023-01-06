<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class HomeController extends Controller
{
    public function index(Request $request ,$user_id)
   {
        $data=array();
        $data['post_id']=$request->post_id;
        $data['user_id']=$request->user_id;
        $data['post_subject']=$request->subject;
        $data['post_description']=$request->pd;

        $result=DB::table('tbl_post')
               ->insert($data);

        Session::put('message',"Post created successfully in community. You can also see your post in timeline");
        return Redirect::to('/user-profile');       
   }

   public function post_create(Request $request ,$user_id)
   {
        $data=array();
        $data['post_id']=$request->post_id;
        $data['user_id']=$request->user_id;
        $data['post_subject']=$request->subject;
        $data['post_description']=$request->pd;

        $result=DB::table('tbl_post')
               ->insert($data);

        Session::put('message',"Post created successfully in community. You can also see your post in timeline");
        return Redirect::to('/community');       
   }

   public function login_page()
   {
     return view('public.admin_login');
   }

   public function login_admin(Request $request)
    {
      $admin_email=$request->ue;
      $admin_password=$request->up;
      $result=DB::table('tbl_admin')
              ->where('admin_email',$admin_email)
              ->where('admin_password',$admin_password)
              ->first();

              if ($result) {
                Session::put('name',$result->admin_name);
                Session::put('email',$result->admin_email);
                Session::put('address',$result->admin_address);
                Session::put('admin_id',$result->admin_id);
                Session::put('phone',$result->admin_phone);
                return Redirect::to('/admin-profile');
              }else {
                Session::put('message','Email or password is invalid');
                return Redirect::to('/login-admin');
              }
    }

    public function admin_profile()
    {
      return view('public.admin_profile');
    }

    public function edit_profile($admin_id)
    {    
        $admin_info=DB::table('tbl_admin')
                       ->where('admin_id',$admin_id)
                       ->first();

        return Redirect::to('/admin-change-profile');
    }

    public function admin_change()
    {
       return view('public.edit_admin');
    }

    public function profile_update(Request $request ,$admin_id)
    {
      $data=array();
      $data['admin_name']=$request->un;
      $data['admin_email']=$request->ue;
      $data['admin_address']=$request->ua;
      $data['admin_phone']=$request->uph;
      $data['admin_password']=$request->up;

      $result=DB::table('tbl_admin')
              ->where('admin_id',$admin_id)
              ->update($data);
        
      if($admin_id){
         Session::put('name',$request->un);
         Session::put('phone',$request->ue);
         Session::put('admin_id',$admin_id);
         Session::put('admin_address',$request->ua);
         return Redirect::to('/admin-profile');
      }
    }
    
    public function all_donar()
    {
      $donor_info=DB::table('tbl_user')
                   ->where('user_designation',"Donar")
                   ->get();
      $show_donor=view('public.all_donar')
                      ->with('donor_info',$donor_info);

     return view('welcome')
            ->with('public.all_donar',$show_donor);
    }
    
    public function all_user()
    {
      $donor_info=DB::table('tbl_user')
                   ->where('user_designation',"User")
                   ->get();
      $show_donor=view('public.all_user')
                      ->with('donor_info',$donor_info);

     return view('welcome')
            ->with('public.all_user',$show_donor);
    }
    
    public function ban_donar($user_id){

      DB::table('tbl_user')
          ->where('user_id',$user_id)
          ->delete();

      Session::put('message','Donar banned successfully...!');
         return Redirect::to('/all-donar');

    }
    
    public function ban_user($user_id){

      DB::table('tbl_user')
          ->where('user_id',$user_id)
          ->delete();

      Session::put('message','User banned successfully...!');
         return Redirect::to('/all-user');

    }
    
    public function admin_registration()
    {
       return view('public.admin_reg');
    }
    
    public function save_admin(Request $request)
    {
        $data=array();
        $data['admin_name']=$request->an;
        $data['admin_email']=$request->ae;
        $data['admin_address']=$request->aa;
        $data['admin_password']=$request->ap;
        $data['admin_phone']=$request->aph;

        $result=DB::table('tbl_admin')
                ->insert($data);
        
       Session::put('message','New admin created successfully...!');
        return Redirect::to('/admin-profile');
      
    }
}
