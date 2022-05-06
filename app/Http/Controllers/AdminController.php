<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function upload(Request $request ){
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->Room=$request->room;
        $doctor->save();
        return redirect()->back()->with("message","Doctor added sucessfully ");
    }
public function show_appointment()
    {
        $data=appointment::all();
        return view('admin.show_appointment',compact('data'));
        
    }
    public function approved($id){
        $data=appointment
        ::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }
    public function cancel($id){
        $data=appointment::find($id);
        $data->status="canceled";
        $data->delete();
        $data->save();
        return redirect()->back();
    }
    public function showdoctor()
    {
        return view('admin.showdoctor');
    }
}
