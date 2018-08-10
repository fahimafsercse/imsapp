<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Offer;
use App\Account;
use App\Member;
class AdminController extends Controller
{
    public function adminindex(){
        return view('admin.adminindex');
    } 
    public function useraccounts(){
        
        $result=  Account::all();
        return view('admin.useraccounts')->with('accountlist', $result);
    } 
    public function offerlist(){
        /*return Offer::all();*/
        $result=  Offer::all();

        return view('admin.offer')
            ->with('offerlist', $result);
    } 


    public function membershipadmin(){
        $result=  Member::all();
        return view('admin.membershipadmin')->with('memberlist', $result);
    } 
    public function stocks(){
        return view('admin.stocks');
    }
    public function log(){
        return view('admin.log');
    }


    public function categorylist(){
        $result=  Category::all();

         /*return view('category.list')
    		->with('catlist', $result);*/
    }






    public function categorystore(Request $request)
    {
        /*$validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);*/

        // The blog post is valid...
    }

}
