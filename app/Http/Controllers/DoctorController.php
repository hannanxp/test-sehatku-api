<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|in:dr,prof',
            'fullname' => 'required|string|max:100',
            'gender' => 'required|in:pria,wanita',
            'doctor_specialist_id' => 'required',
            'experience' => 'required|string|max:50',
            'education' => 'required|string|max:100',
            'str_no' => 'required|string|max:100',
            'place' => 'required|string|max:100',
            'sip_no' => 'required|string|max:100',
            'status' => 'required|in:active,inactive',
            'phone' => 'required|max:15',
            'email' => 'required|email',
            'password' => [
                'required',
                'string',
                'min:6', // must be at least 10 characters in length
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'description' => 'required|string|max:500',
            'photo' => 'required'
        ]);

        $doctor = new Doctor([
            'id_no' => '', // sementara diisi string kosong, kedepan mungkin ada format khusus
            'title' => $request->input('title'),
            'fullname' => $request->input('fullname'),
            'gender' => $request->input('gender'),
            'doctor_specialist_id' => $request->input('doctor_specialist_id'),
            'experience' => $request->input('experience'),
            'education' => $request->input('education'),
            'str_no' => $request->input('str_no'),
            'place' => $request->input('place'),
            'sip_no' => $request->input('sip_no'),
            'status' => $request->input('status'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => app('hash')->make($request->input('password')),
            'description' => $request->input('description'),
            'photo' => $request->input('photo')
        ]);
        
        $doctor->save();
        
        //return redirect('/doctors')->with('success', 'Doctor saved!');
        return redirect('/doctors/create')->with('success', 'Doctor saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
