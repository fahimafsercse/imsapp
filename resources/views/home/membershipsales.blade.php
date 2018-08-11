
@extends('home.layouts.saleslayout')
@section('content') 

                
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">            
                    <div class="card">
                        <div class="card-body">
                            <center><h5 class="card-title">Membership Details</h5></center>
                            <a href="#">Back to Home</a>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Member ID</th>                                                
                                            <th>Member Type ID</th>
                                            <th>Address</th>
                                            <th>Phone</th>                                   
                                            <th>Email</th>
                                            <th>Member From</th>
                                            <th>Total Shopping</th>
                                            <th>Action</th>                                              
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($memberlist as $member)
                                            <tr>
                                                <td>{{$member->member_name}}</td>
                                                <td>{{$member->member_id}}</td>
                                                <td>{{$member->member_type_id}}</td>
                                                <td>{{$member->member_address}}</td>
                                                <td>{{$member->member_phone}}</td>
                                                <td>{{$member->member_email}}</td>
                                                <td>{{$member->member_from}}</td>
                                                <td>{{$member->total_shopping}}</td>
                                                <td>
                                                    <a href="#" class = "btn btn-primary">edit</a>
                                                    <a href="#" class = "btn btn-danger">delete</a>
                                                </td>
                                            </tr>
                                            @endforeach    
                                                        
                                    </tbody>                                   
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>




         <!--/Add member modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="addMember">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Member</h4>
                    </div>
                    <form class="form-horizontal" action="membershipsales/add" method="POST" id="addMemberForm">
            
                        <div class="modal-body">
                        <div class="messages"></div>
                    
                                <div class="form-group"> <!--/here teh addclass has-error will appear -->
                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10"> 
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        <!-- here the text will apper -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="form-group"> <!--/here teh addclass has-error will appear -->
                                    <label for="phone" class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10"> 
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
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
                                <div class="form-group">
                                    <label for="active" class="col-sm-2 control-label">MemberType</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="membertype" id="membertype">
                                            <option value="">~~SELECT~~</option>
                                            <option value="1">MT01</option>
                                            <option value="2">MT02</option>
                                        </select>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--/Edit member modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="editMember">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Edit Member</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form class="form-horizontal" action="" name='editMember'method="POST" id="editMemberForm">
            
                        <div class="modal-body">
                        <div class="messages"></div>
                    
                                <div class="form-group"> <!--/here teh addclass has-error will appear -->
                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10"> 
                                        <input type="text" class="form-control" id="name" name="member_name" placeholder="Name">
                                        <!-- here the text will apper -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" name="member_address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="form-group"> <!--/here teh addclass has-error will appear -->
                                    <label for="phone" class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10"> 
                                        <input type="text" class="form-control" id="phone" name="member_phone" placeholder="Phone">
                                        <!-- here the text will apper -->
                                    </div>
                                </div>

                                <div class="form-group"> <!--/here teh addclass has-error will appear -->
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10"> 
                                        <input type="text" class="form-control" id="email" name="member_email" placeholder="Email">
                                        <!-- here the text will apper -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="active" class="col-sm-2 control-label">MemberType</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="member_type_id" id="membertype">
                                            <option value="">~~SELECT~~</option>
                                            <option value="1">MT01</option>
                                            <option value="2">MT02</option>
                                        </select>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <div class="modal-footer">
                                <button  class="btn btn-danger" >Close</button>
                                <button  class="btn btn-primary">Save changes</button>
                        </div>
                
                    </form>
                </div>
            </div>
        </div>












    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- this page js -->
    <script src="{{asset('extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('extra-libs/DataTables/datatables.min.js')}}"></script>

   
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
@endsection