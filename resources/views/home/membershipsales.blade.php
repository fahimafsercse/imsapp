
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
                            <a href="/salesindex">Back to Home</a> | 
	                        <a href="#">Create New</a>
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
                                                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>   
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