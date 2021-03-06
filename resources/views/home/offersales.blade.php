
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
                            <a href="/">Back to Home</a> | 
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
                                        @foreach($offerlist as $offer)
                                        <tr>
                                            <td>{{$offer->offer_name}}</td>
                                            <td>{{$offer->offer_id}}</td>
                                            <td>{{$offer->offer_description}}</td>
                                            <td>{{$offer->discount}}</td>
                                            <td>{{$offer->offer_from}}</td>
                                            <td>{{$offer->offer_to}}</td>
                                            <td>{{$offer->item_id}}</td>
                                            <td>{{$offer->category_id}}</td>
                                            <td>{{$offer->member_type_id}}</td>
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