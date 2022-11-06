<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        $doctor = new Doctor;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;

        $doctor->save();
        return redirect('/showdoctor');
    }

    public function showappointment(){
        $appointments=appointment::all();
        return view('admin.showappointment', compact('appointments'));
    }

    public function approved($id){
        $appointment=appointment::find($id);
        $appointment->status='approved';
        $appointment->save();
        return redirect()->back();
    }

    public function disapp($id){
        $appointment=appointment::find($id);
        $appointment->delete();
        return redirect()->back();
    }

    public function showdoctor(){
        $doctor=doctor::all();
        return view('admin.showdoctor', compact('doctor'));
    }

    public function deletedoctor($id){
        $doctor=doctor::find($id);
        $doctor->delete();
        return redirect()->back();
    }

    public function updatedoctor($id){
        $doctor=doctor::find($id);
        return view('admin.updatedoctor', compact('doctor'));
    }

    public function editdoctor(Request $request, $id){
        $doctor=doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->save();
        return redirect('/showdoctor');
    }
}
