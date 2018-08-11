<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\Member;
use App\Item;
use App\Category;
class HomeController extends Controller
{
    //
    public function salesindex(){
    	return view('home.salesindex');
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


    

    public function memberupdate(Request $request, $id)
    {
        $member = Member::find($request->member_id);
        $member->member_name = $request->member_name;
        $member->member_email = $request->member_email;
        $member->member_address = $request->member_address;
        $member->member_phone = $request->member_phone;
        $member->member_type_id = $request->member_type_id;
        $member->save();

        return view('home.membershipsales')
        ->with('memberlist', $member);;
    }




    public function pos(){
       
    	return view('home.pos');
    }
    public function availableitems(){
        $itemresult=  Item::all();
       $catresult = new Category();
        $catresult=  Category::all();     
       /* $catresult->category_name = $catresult->category_name + '('+$catresult->category_id+')';*/
        return view('home.availableitems')
            ->with('itemlist', $itemresult)->with('catlist', $catresult);
    }
   
    

}
