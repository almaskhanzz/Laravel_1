<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){

    	$std = $this->studentList();

    	return view('student.index')->with('users', $std);
    }

    function details($id){

    	//your task finding student from array
		$stds = $this->studentList();
		foreach($stds as $std)
		{
			if($std['id']==$id)
			{
				return view('student.details')->with('std', $std);
			}
		}
    	
    }

    function studentList(){
    	return [
    			['id'=>'12-222222-1','username'=>'xyz', 'password'=>'123'],
    			['id'=>'13-222222-2','username'=>'asd', 'password'=>'567'],
    			['id'=>'14-222222-3','username'=>'hjk', 'password'=>'345']
    	];
    }

    function edit($id){

    	//find student form array
		$stds = $this->studentList();
		foreach($stds as $std)
		{
			if($std['id']==$id)
			{
				return view('student.edit')->with('std', $std);
			}
		}
    }
	
	function update($id){
		
    	//update existing student in array 
		$stds = $this->studentList();
		foreach($stds as $std) {
			if($std['id']==$id)
			{
				$std['username']=$req->username;
				$std['password']=$req->password;
				return view('student.details')->with('std', $std);
			}
		}
    }
    function delete($id){

    	//find student form array
		$stds = $this->studentList();
		foreach($stds as $std)
		{
			if($std['id']==$id)
			{
				return view('student.delete')->with('std', $std);
			}
		}
    	
    }

    function destroy($id){

    	//delete student from array and send the updated array in userlist
		$stds = $this->studentList();
		foreach($stds as $key => $item) {
			if ($item['id'] === $id) {
			  unset($stds[$key]);
			}
		}
		sort($stds);
		return view('student.index')->with('users', $stds);
	}
	
}