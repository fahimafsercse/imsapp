
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
                            <center><h5 class="card-title">Membership Details</h5></center>
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
                                                                                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                <td>Adal Islam</td>
                                                <td>0001</td>
                                                <td>MT1</td>
                                                <td>201-A Nakhalpara,farmgate</td>
                                                <td>01620661913</td>
                                                <td>adal@gmail.com</td>
                                                <td>7/10/2018</td>
                                                <td>20000000000</td>                                               
                                                                                           
                                        </tr>
                                        <tr>
                                                <td>Rukaiya</td>
                                                <td>0002</td>
                                                <td>MT2</td>
                                                <td>201-A Mohakhali</td>
                                                <td>01620661913</td>
                                                <td>ruku@gmail.com</td>
                                                <td>21/02/2018</td>
                                                <td>200</td>                                               
                                                
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