@extends('layouts.UI_Admin.app')
@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Customer</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{!! url('/system') !!}" >System</a>
                </li>
                <li>
                    <a href="{!! url('/system/customer/') !!}" >Customer</a>
                </li>
                <li class="active">
                    <a href="{!! url('/system/customer/create') !!}"> <strong>New Customer</strong></a>
                </li>
            </ol>
        </div>
        <div class="col-md-12 col-sm-6 sub-menu product-box">
            <div class="col-md-6">
                <div class="m-t">
                    <a href="/system/customer" class="btn btn-ms btn-outline btn-primary" title="Go Back" >Back <i class="fa fa-long-arrow-left"></i> </a>
                    <a href="/system/customer/create" class="btn btn-ms btn-outline btn-primary" title="Add New Item" >New Customer <i class="fa fa-plus"></i> </a>
                </div>
            </div>
        </div><!-- Submenu -->
    </div>
@endsection

@section('content')
    <br/>
    <div class="row wrapper  white-bg ">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Customer Form <small></small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ibox-content">
                    {!! Form::open(['action'=>'System\Customer\CustomerController@store','class'=>'form-horizontal']) !!}
                    @include('System.Customer.form.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
