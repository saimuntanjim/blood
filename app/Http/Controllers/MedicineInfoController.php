<?php

namespace App\Http\Controllers;
use App\Models\medicine_info;
use Illuminate\Http\Request;

class MedicineInfoController extends Controller
{
    public function store(Request $request)
    {
        $Save_medicine                  =new medicine_info();
        $Save_medicine->name            =$request->Patient;
        $Save_medicine->user_id         =50;
        $Save_medicine->phone           =$request->mobile;
        $Save_medicine->floor           =$request->floor;
        $Save_medicine->room            =$request->room;
        $Save_medicine->ward            =$request->ward;
        $Save_medicine->description     =$request->description;
        $Save_medicine->status          =0;

        //Prescription Upload
        if (isset($request->prescription)) {
        $update_fileone                  = $request->file('prescription');
        $nameone                         = time().'-'.$update_fileone->getClientOriginalName();
        $uploadPathone                   = '/uploads/medicine_info/';
        $update_fileone->move($uploadPathone,$nameone);
        $fileUrlone                      =$uploadPathone.$nameone;
        $Save_medicine->prescription     = $fileUrlone;
        }else{
        $Save_medicine->prescription     = "";
        }
        //Prescription Upload
        $Save_medicine->save();

        return redirect()->back();

    }

}
