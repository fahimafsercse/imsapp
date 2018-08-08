<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminindex(){
        return view('admin.adminindex');
    } 
    public function useraccounts(){
        return view('admin.useraccounts');
    } 
    public function offer(){
        return view('admin.offer');
    } 
    public function membershipadmin(){
        return view('admin.membershipadmin');
    } 
   
}
