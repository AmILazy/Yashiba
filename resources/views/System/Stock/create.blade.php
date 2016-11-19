@extends('layouts.UI_Admin.app')
@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Stock</h2>
            <ol class="breadcrumb">
                <li>
                    <a>System</a>
                </li>
                <li>
                    <a  href="{!! url('/system/stock') !!}" >Stock</a>
                </li>
                <li class="active">
                    <a href="{!! url('/system/stock/create') !!}"> <strong>New Stock</strong></a>
                </li>
            </ol>
        </div>
        <div class="col-md-12 col-sm-6 sub-menu product-box">
            <div class="col-md-6">
                <div class="m-t">
                    <a href="/system" class="btn btn-ms btn-outline btn-primary" title="Go Back" >Back <i class="fa fa-long-arrow-left"></i> </a>
                    <a href="/system/stock/create" class="btn btn-ms btn-outline btn-primary" title="Add new stock item">New Stock <i class="fa fa-plus"></i> </a>
                    <a href="/system/item/create" class="btn btn-ms btn-outline btn-primary" title="Add New Item" >New Item <i class="fa fa-plus"></i> </a>
                </div>
            </div>
        </div><!-- Submenu -->
    </div>
@endsection