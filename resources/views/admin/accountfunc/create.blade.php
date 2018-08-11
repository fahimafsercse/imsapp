

@extends('admin.layouts.adminlayout')

@section('content') 
<h2>Add Account</h2>
<a href="/accounts">Back to List</a>
<br/><br/>
<form method="post">
        <form class="form-horizontal" method="POST">
            
                <div class="modal-body">
                <div class="messages"></div>
            
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="user_name" placeholder="username"required>
                            </div>
                        </div>
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="Password" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="password" name="password" placeholder="password"required>
                                <!-- here the text will apper -->
                            </div>
                        </div>
        
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="address" class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10"> 
                                <textarea type="text" class="form-control" id="address" name="address" placeholder="address"></textarea>
                                <!-- here the text will apper -->
                            </div>
                        </div>


                        <div class="form-group"> <!--/here teh addclass has-error will appear -->
                            <label for="salary" class="col-sm-2 control-label">Salary</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="salary" name="salary" placeholder="salary"required>
                                <!-- here the text will apper -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="active" class="col-sm-2 control-label">AccountType</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="account_type_id" id="accounttypeid" required>
                                        <option value=""></option>                             
                                    @foreach($accounttype as $ac)
                                         <option value={{$ac->account_type_id}}>{{$ac->account_type_id}}</option>       
                                    @endforeach   
                                </select>
                            </div>
                        </div> 
                        
                        <button  class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
</form>

              
@endsection




