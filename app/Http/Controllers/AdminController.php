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
use App\MemberType;
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
        $acc->salary = floatval($request->salary);
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
        $account->salary = floatval($request->salary);
        $account->account_type_id = $request->account_type_id;
       
        $account->save();
        return redirect()->route('accounts');
       
    }
    public function destroyaccount(Request $request, $id){
        Account::destroy($request->account_id);
        return redirect()->route('accounts'); 
    }













    //offer
    public function offers(){
        
        $result=  Offer::all();

        return view('admin.offer')
            ->with('offerlist', $result);
    } 
    public function createoffer(){
        $memberlist= MemberType::all();
        $catlist= Category::all();
        return view('admin.offerfunc.create')->with('membertype', $memberlist)->with('catlist', $catlist);
    }
    public function offerstore(Request $request){
        //return $request;
        Offer::create();
        $offer = new Offer();
        $offer->offer_name = $request->offer_name;
        $offer->offer_description = $request->offer_description;
        $offer->discount = floatval($request->discount);
        $offer->offer_from = $request->offer_from;
        $offer->offer_to = $request->offer_to;
        $offer->item_id = $request->item_id;
        $offer->category_id = $request->category_id;
        $offer->member_type_id = $request->member_type_id;
        $offer->save();
        return redirect()->route('offers');
        //return view('admin.useraccounts')->with('accountlist', $result);  
    }  

    public function editoffer($id){
          $membertype=  MemberType::all();
          $catlist = Category::all();
          $offer = Offer::find($id);
          return view('admin.offerfunc.edit')->with('membertype', $membertype)->with('catlist',$catlist)->with('offer',$offer);
      }
      public function deleteoffer($id){
          $offer = Offer::find($id);
          return view('admin.offerfunc.delete')->with('offer', $offer);
      }
  
      public function updateoffer(Request $request, $id){
         // return $request;
          $offer  = Offer::find($request->offer_id);
         // return $offer;
          $offer->offer_name = $request->offer_name;
          $offer->offer_description = $request->offer_description;
          $offer->discount = floatval($request->discount);
          $offer->offer_from = $request->offer_from;
          $offer->offer_to = $request->offer_to;
          $offer->item_id = $request->item_id;
          $offer->category_id = $request->category_id;
          $offer->member_type_id = $request->member_type_id;
          $offer->save();
          return redirect()->route('offers');
         
      }
      public function destroyoffer(Request $request, $id){
          Offer::destroy($request->offer_id);
          return redirect()->route('offers'); 
      }



















    public function adminindex(){
        return view('admin.adminindex');
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
