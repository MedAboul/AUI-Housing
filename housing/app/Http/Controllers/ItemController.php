<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view('Home.addItem');
    }

    public function store(Request $request)
    {
        $request->validate([ 'student_id'=>'required |min:5 ']);
        $request->validate([ 'student_fname'=>'required']);
        $request->validate([ 'student_lname'=>'required ']);
        $request->validate([ 'email'=>'email| required ']);
        $request->validate([ 'phone'=>'required ']);
        $request->validate([ 'gender'=>'required ']);
        $request->validate([ 'local'=>'required ']);
        $request->validate([ 'items'=>'required ']);

        $Item = new Item();

        $Item->student_id = $request->input('student_id');
        $Item->student_fname = $request->input('student_fname');
        $Item->student_lname = $request->input('student_lname');
        $Item->email = $request->input('email');
        $Item->phone = $request->input('phone');
        $Item->gender = $request->input('gender');
        $Item->local = $request->input('local');
        $Item->items= $request->input('description');
        

        $Item->save();

        $request->session()->flash('status','Student housing items are stored');
        return redirect('/addItem');
    }
}
