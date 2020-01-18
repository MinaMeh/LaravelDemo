<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Department;

class StudentController extends Controller
{
    public function test(){
        dd ('hello');
    }
    public function show(){
        $members= Student::all() ;
        return view('members.show', compact('members'));
    }
    public function create(){
        $departments= Department::all();
        return view('members.create', compact('departments'));

    }
    public function add(Request $request){

      /*  $this->validate(request(),[
			'first_name'=>'required|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:30',
			'family_name'=>"required|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:30",
			'email'=>'required|email'

        ]);*/
        $member= new Student;
        $member->first_name= request('first_name');
        $member->family_name= request('family_name');
        $member->email= request('email');
        $member->department_id= request('departement');
        $member->save();
        return redirect("/");
    }
    public function delete($id){
        $member=Student::find($id);
        $member->delete();
        return redirect("/");

    }
    public function edit($id){
        $member= Student::find($id);
        $departments= Department::all();
        return view ('members.edit', compact('member','departments'));
    }
    public function update($id){
        $member= Student::find($id);
        $member->first_name= request('first_name');
        $member->family_name= request('family_name');
        $member->email= request('email');
        $member->department_id= request('departement');
        $member->save();
        return redirect("/");
    }
}
