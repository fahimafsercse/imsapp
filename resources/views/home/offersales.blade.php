
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
                            <center><h5 class="card-title">Offers</h5></center>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                                <th>Name</th>
                                                <th>Offer ID</th>                                                
                                                <th>Description</th>
                                                <th>Discount Percentage</th>
                                                <th>Offer Given</th>
                                                <th>Offer Valid</th>
                                                <th>Item Code</th>
                                                <th>Catagory ID</th>
                                                <th>Member Type ID</th>
                                               
                                                
                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                <td>Eid offer</td>
                                                <td>0001</td>
                                                <td>Discount 10%</td>
                                                <td>10</td>
                                                <td>4/10/2018</td>
                                                <td>7/10/2018</td>
                                                <td>IC001</td>
                                                <th>CT02</th>
                                                <th>MT01</th>
                                                
                                                
                                                
                                        </tr>
                                        <tr>
                                                <td>Boishakhi offer</td>
                                                <td>0002</td>
                                                <td>Discount 15%</td>
                                                <td>15</td>
                                                <td>4/10/2018</td>
                                                <td>7/10/2018</td>
                                                <td>IC002</td>
                                                <th>CT02</th>
                                                <th>MT02</th>
                                               
                                                
                                                
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