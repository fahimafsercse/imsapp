@extends('admin.layouts.adminlayout')

@section('content') 



<!-- Cards -->
<div class="row">
        <div class="col-md-3">
            <div class="card m-t-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_line_neutral left text-center m-t-10"><span><span style="display: none;">10,15,8,14,13,10,10</span>
                            <canvas width="50" height="24"></canvas>
                            </span>
                            <h6>10%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center p-t-10">
                        <h3 class="mb-0 font-weight-bold">150</h3>
                        <span class="text-muted">New Users</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-t-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_bar_bad left text-center m-t-10"><span><span style="display: none;">3,5,6,16,8,10,6</span>
                            <canvas width="50" height="24"></canvas>
                            </span>
                            <h6>-40%</h6></div>
                    </div>
                    <div class="col-md-6 border-left text-center p-t-10">
                        <h3 class="mb-0 font-weight-bold">4560</h3>
                        <span class="text-muted">Orders</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-t-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_line_good left text-center m-t-10"><span><span style="display: none;">12,6,9,23,14,10,17</span>
                            <canvas width="50" height="24"></canvas>
                            </span>
                            <h6>+60%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center p-t-10">
                        <h3 class="mb-0 ">5672</h3>
                        <span class="text-muted">Active Users</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-t-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_bar_good left text-center m-t-10"><span>12,6,9,23,14,10,13</span>
                            <h6>+30%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center p-t-10">
                        <h3 class="mb-0 font-weight-bold">2560</h3>
                        <span class="text-muted">Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End cards -->        




   <!--pie chart -->     

            <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Stocks vs item</h5>
                                <div class="pie" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">item vs price</h5>
                                <div class="bars" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- pie charts end -->

                 <!-- Chart-2 -->
                 <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Catagory vs Sales</h5>
                                    <div id="placeholder" style="height: 400px;"></div>
                                    <p id="choices" class="m-t-20"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Chart-2 -->



                <script src="{{asset('libs/chart/matrix.interf}ace.js')}}"></script>
                <script src="{{asset('libs/chart/excanvas.min.js')}}"></script>
                <script src="{{asset('libs/flot/jquery.flot.js')}}"></script>
                <script src="{{asset('libs/flot/jquery.flot.pie.js')}}"></script>
                <script src="{{asset('libs/flot/jquery.flot.time.js')}}"></script>
                <script src="{{asset('libs/flot/jquery.flot.stack.js')}}"></script>
                <script src="{{asset('libs/flot/jquery.flot.crosshair.js')}}"></script>
                <script src="{{asset('libs/chart/jquery.peity.min.js')}}"></script>
                <script src="{{asset('libs/chart/matrix.charts.js')}}"></script>
                <script src="{{asset('libs/chart/jquery.flot.pie.min.js')}}"></script>
                <script src="{{asset('libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
                <script src="{{asset('libs/chart/turning-series.js')}}"></script>
                <script src="{{asset('dist/js/pages/chart/chart-page-init.js')}}"></script>




          


              
 @endsection