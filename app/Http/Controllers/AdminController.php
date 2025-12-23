<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function doctorListing()
    {
        return view('admin.doctor-listing');
    }

    public function createDoctorForm(){
        return view('admin.doctor-form');
    }

     public function editDoctorForm($doctor_id){
        $id = $doctor_id;
        return view('admin.edit-doctor',compact('id'));
    }
    public function specialityListing(){
        return view('admin.specialities');
    }

    public function createSpecialityForm(){
        return view('admin.speciality-form');
    }

    public function editSpecialityForm($speciality_id){
        $id = $speciality_id;
        return view('admin.edit-speciality-form',compact('id'));
    }


    public function appointments(){
        return view('admin.appointments');
    }

    public function reschedulingForm($id){
        $appointment_id = $id;
        return view('admin.reschedule-form',compact('appointment_id'));
    }
}
