<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Offer;
use App\Account;
use App\Member;
use App\AccountType;
class AdminController extends Controller
{


    //useraccount
    public function accounts(){
        
        $result=  Account::all();
        return view('admin.useraccounts')->with('accountlist', $result);
    }
    public function createaccount(){
        $result= AccountType::all();
        return view('admin.accountfunc.create')->with('accounttype', $result);
    }
    public function accountstore(Request $request){
        Account::create();
        $acc = new Account();
        $acc->name = $request->name;
        $acc->user_name = $request->user_name;
        $acc->password = $request->password;
        $acc->email = $request->email;
        $acc->address = $request->address;
        $acc->salary = $request->salary;
        $acc->account_type_id = $request->account_type_id;
        $acc->save();
        return redirect()->route('accounts');
        //return view('admin.useraccounts')->with('accountlist', $result);  
    }  
    
    public function editaccount($id){
      //  return Account::find($id);
        $result=  AccountType::all();
        $account = Account::find($id);
        return view('admin.accountfunc.edit')->with('accounttype', $result)->with('account',$account);
    }
    public function deleteaccount($id){
        $account = Account::find($id);
        return view('admin.accountfunc.delete')->with('account', $account);
    }

    public function updateaccount(Request $request, $id){
        $account  = Account::find($request->account_id);
        //return $account;
        $account->user_name = $request->user_name;
        $account->password = $request->password;
        $account->name = $request->name;
        $account->email = $request->email;
        $account->address = $request->address;
        $account->salary = $request->salary;
        $account->account_type_id = $request->account_type_id;
       
        $account->save();
        return redirect()->route('accounts');
       
    }
    public function destroyaccount(Request $request, $id){
        Account::destroy($request->account_id);
        return redirect()->route('accounts'); 
    }



















    public function adminindex(){
        return view('admin.adminindex');
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
