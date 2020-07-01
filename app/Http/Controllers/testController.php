<?php

namespace App\Http\Controllers;
use  App\Test;

use Illuminate\Http\Request;

class testController extends Controller
{
    public  function  testPost(Request $request){
    	$test=new Test;
    	$test->text=$request->input('text');
    	$test->save();
    	 return response()->json(['test'=>$test],201);

    }
    public  function  getPost(){
    	$test=Test::all();
    	 $response=['test'=>$test];
    	 return  response()->json($response);
    }
    public  function  deletePost($id){
    	
    }
    public  function  putPost(Request $request,$id){
    	
    }
}
