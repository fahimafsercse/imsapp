
@extends('home.layouts.saleslayout')
@section('content') 
<div>
    <em>Catagory</em>
    <select data-placeholder="Choose a Catagory..." class="chosen-select" tabindex="2">
        <option value=""></option>
        @foreach($catlist as $cat)
                <option value={{$cat->category_name}}>{{$cat->category_name}}</option>       
         @endforeach   
    </select>
</div>


    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">            
                <div class="card">
                    <div class="card-body">
                        <center><h5 class="card-title">Stocks</h5></center>
                        <a href="/">Back to Home</a> | 
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>ItemCode</th>    
                                        <th>Description</th>
                                        <th>CatagoryID</th>
                                        <th>Price</th>
                                        <th>Stock</th>                                             
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($itemlist as $item)
                                    <tr>
                                        <td>{{$item->item_name}}</td>
                                        <td>{{$item->item_id}}</td>
                                        <td>{{$item->item_description}}</td>
                                        <td>{{$item->category_id}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->stock}}</td>
                                       
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








    <!-- this page js -->
    <script src="{{asset('chosen/docsupport/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('chosen/chosen.jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('chosen/docsupport/prism.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('chosen/docsupport/init.js')}}" type="text/javascript" charset="utf-8"></script>


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

