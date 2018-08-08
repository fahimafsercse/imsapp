<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function salesindex(){
        $data = array(
            'title' => 'Welcome to Mizy Store',
            'desc' => 'Its a Grocery Store' 
        );
    	return view('home.salesindex')->with($data);
    }
    public function offersales(){
       
    	return view('home.offersales');
    }
    public function membershipsales(){
       
    	return view('home.membershipsales');
    }
    

}
