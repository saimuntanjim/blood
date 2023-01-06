<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;

class FrontendController extends Controller
{
    public function home()
    {
        return view('public.index');
    }

    public function login_user()
    {
        return view('public.login');
    }

    public function donar()
    {
      $donor_info=DB::table('tbl_user')
                   ->where('user_designation',"Donar")
                   ->get();
      $show_donor=view('public.donar')
                      ->with('donor_info',$donor_info);

     return view('welcome')
            ->with('public.donar',$show_donor);
    }

    public function registration()
    {
        return view('public.registration');
    }

    public function about()
    {
        return view('public.about');
    }

    public function community_page()
    {
        return view('public.community');
    }
    
    public function details_page()
    {
        return view('public.detail');
    }

    
}
