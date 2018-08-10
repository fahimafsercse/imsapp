
@extends('admin.layouts.adminlayout')
@section('content') 

                   
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">            
                    <div class="card">
                        <div class="card-body">
                            <center><h5 class="card-title">User Accounts</h5></center>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>User Type</th>
                                            <th>Email</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($accountlist as $account)
                                            <tr>
                                                <td>{{$account->name}}</td>
                                                <td>{{$account->account_id}}</td>
                                                <td>{{$account->user_name}}</td>
                                                <td>{{$account->password}}</td>
                                                <td>{{$account->account_type_id}}</td>
                                                <td>{{$account->email}}</td>
                                                <td>{{$account->join_date}}</td>
                                                <td>{{$account->salary}}</td>
                                                <td><a href="#">Edit</a>|<a href="#">Delete</a></td>  
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