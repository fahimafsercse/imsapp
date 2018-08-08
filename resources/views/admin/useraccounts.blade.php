
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
                                            <th>Password</th>
                                            <th>User Type</th>
                                            <th>Email</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>01</td>
                                            <td>*****</td>
                                            <td>Admin</td>
                                            <td>example@gmail.com</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>Edit</td>

                                        </tr>
                                        <tr>
                                                <td>Tiger Nixon</td>
                                                <td>01</td>
                                                <td>*****</td>
                                                <td>Admin</td>
                                                <td>example@gmail.com</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>Delete</td>
                                            </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>02</td>
                                            <td>******</td>
                                            <td>Sales</td>
                                            <td>example@yahoo.com</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td>Delete</td>
                                        </tr>                               
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