<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Offer;
class AdminController extends Controller
{
    public function adminindex(){
        return view('admin.adminindex');
    } 
    public function useraccounts(){
        return view('admin.useraccounts');
    } 
    public function offerlist(){
        /*return Offer::all();*/
        $result=  Offer::all();

        return view('admin.offer')
            ->with('offerlist', $result);
    } 


    public function membershipadmin(){
        return view('admin.membershipadmin');
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
