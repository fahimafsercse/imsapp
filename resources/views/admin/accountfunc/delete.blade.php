

@extends('admin.layouts.adminlayout')

@section('content') 
<h2>Delete Account</h2>
<a href="{{route('accounts')}}">Back to List</a>
<br/><br/>
<form method="POST">
        <form class="form-horizontal" method="POST">
            @csrf
            
                <div class="modal-body">
                <div class="messages"></div>

            
                        
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <div class="col-sm-10"> 
                                <input type="hidden" class="form-control" id="account_id" name="account_id" value="{{$account->account_id}}"readonly>
                            </div>
                        </div>
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="name" name="name" value="{{$account->name}}"readonly>
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="user_name" value="{{$account->user_name}}"readonly>
                            </div>
                        </div>
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="Password" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="password" name="password" value="{{$account->password}}"readonly>
                                <!-- here the text will apper -->
                            </div>
                        </div>
        
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="email" name="email" value="{{$account->email}}"readonly>
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="address" class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="address" name="address" value="{{$account->address}}"readonly>
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="salary" class="col-sm-2 control-label">Salary</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="salary" name="salary" value="{{$account->salary}}"readonly>
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="active" class="col-sm-2 control-label">AccountType</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="account_type_id" id="accounttypeid" readonly>
                                    <option value="{{$account->account_type_id}}">{{$account->account_type_id}} </option>
                                </select>
                            </div>
                        </div> 
                        <h4>This cannot be undone. Are you sure?</h4><br>
                        
                        <input type="submit" class="btn btn-danger" value="Confirm">                 
                    </div>
                </div>
            </form>
</form>

              
@endsection




