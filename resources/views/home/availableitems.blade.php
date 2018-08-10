
@extends('home.layouts.saleslayout')
@section('content') 
    <div>
        <em>Catagory</em>
        <select data-placeholder="Choose a Catagory..." class="chosen-select" tabindex="2">
            <option value=""></option>
            <option value="Biscuits">Biscuits</option>       
            <option value="Chocolates">Chocolates</option>
            <option value="Rice">Rice</option>
            <option value="Tissues">Tissues</option>
        </select>
    </div>
    <!-- this page js -->
    <script src="{{asset('chosen/docsupport/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('chosen/chosen.jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('chosen/docsupport/prism.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('chosen/docsupport/init.js')}}" type="text/javascript" charset="utf-8"></script>
@endsection

