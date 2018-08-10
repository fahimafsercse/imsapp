<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\Member;

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
        $result=  Offer::all();
        return view('home.offersales')
            ->with('offerlist', $result);
    } 

    public function membershipsales(){
        $result=  Member::all();
        return view('home.membershipsales')
            ->with('memberlist', $result);
    }
    public function pos(){
       
    	return view('home.pos');
    }
    public function availableitems(){
       
    	return view('home.availableitems');
    }
   
    

}
