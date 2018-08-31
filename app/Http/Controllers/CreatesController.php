<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Student;

class CreatesController extends Controller
{
    public function home(){
    	$students = Student::all();
    	return view('home',['students'=>$students]);
/*    	echo "<pre>";
    	print_r($articles);
    	echo "</pre>";*/
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required',
			'fb' => 'required',
			'mobile' => 'required'
    	]);

    	$students = new Student;
    	$students->name = $request->input('name');
    	$students->email = $request->input('email');
		$students->fb = $request->input('fb');
		$students->mobile = $request->input('mobile');
    	$students->save();
    	return redirect('/')->with('info','Student Saved Successfully!');
    } 

    public function update($id){
    	$students = Student::find($id);
    	return view('update',['students'=>$students]);
    	/* check 
    	echo '<pre>';
    	print_r($articles);
    	echo "</pre>";
    	exit();*/    	
    } 

    public function edit(Request $request, $id){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required',
			'fb' => 'required',
			'mobile' => 'required'
    	]);
    	$data = array(
			'name' => $request->input('name'),
    		'email' => $request->input('email'),
			'fb' => $request->input('fb'),
			'mobile' => $request->input('mobile')
    	);
    	Student::where('id',$id)
    	->update($data);
    	return redirect('/')->with('info','Student Updated Successfully!');
    } 

    public function read($id){
    	$students = Student::find($id);
    	//return $id;
    	return view('read',['students'=>$students]);
    }

    public function delete($id){
		Student::where('id',$id)
		->delete();
		return redirect('/')->with('info','Student Deleted Successfully!');
    } 
}
