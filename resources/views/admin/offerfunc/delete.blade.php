

@extends('admin.layouts.adminlayout')

@section('content') 
<h2>Delete Offer</h2>
<a href="{{route('offers')}}">Back to List</a>
<br/><br/>
<form method="post">
        <form class="form-horizontal" method="POST">
            @csrf
                <div class="modal-body">
                <div class="messages"></div>
            
                        
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <div class="col-sm-10"> 
                                <input type="hidden" class="form-control" id="offer_id" name="offer_id" value="{{$offer->offer_id}}"readonly>
                            </div>
                        </div>
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="offer_name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="offer_name" name="offer_name" value="{{$offer->offer_name}}" readonly>
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="offer_description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="offer_description" name="offer_description" value="{{$offer->offer_description}}"readonly>
                            </div>
                        </div>
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="discount" class="col-sm-2 control-label">Discount(%)</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="discount" name="discount" value="{{$offer->discount}}"readonly>
                                <!-- here the text will apper -->
                            </div>
                        </div>
        
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="offer_from" class="col-sm-2 control-label">OfferFrom</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="offer_from" name="offer_from" value="{{$offer->offer_from}}"readonly>
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="offer_to" class="col-sm-2 control-label">OfferTo</label>
                            <div class="col-sm-10"> 
                                    <input type="text" class="form-control" id="offer_to" name="offer_to" value="{{$offer->offer_to}}"readonly>
                               
                            </div>
                        </div>


                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="item_id" class="col-sm-2 control-label">ItemID</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="item_id" name="item_id" value="{{$offer->item_id}}"readonly>
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="col-sm-2 control-label">CategoryType</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category_id" id="category_id" readonly>  
                                    <option value={{$offer->category_id}}>{{$offer->category_id}}</option>                          
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                                <label for="member_type_id" class="col-sm-2 control-label">MemberType</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="member_type_id" id="member_type_id" readonly>  
                                        <option value={{$offer->member_type_id}}>{{$offer->member_type_id}}</option>                            
                                    </select>
                                </div>
                        </div>
                        <h4>This cannot be undone. Are you sure?</h4><br>
                        <input type="submit" class="btn btn-danger" value="Confirm">
                    </div>
                </div>
            </form>
</form>

<script src="{{asset('libs/flot/excanvas.js')}}"></script>
<script src="google-code-prettify/prettify.js"></script>
<script src="jquery/jquery.js"></script>
<script src="{{asset('js/frontend_js/bootstrap-datepicker.js')}}"></script>   

              
@endsection




