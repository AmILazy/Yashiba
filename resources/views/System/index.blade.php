@extends('layouts.UI_Admin.app')

@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Home</h2>
            <ol class="breadcrumb">
                <li>
                    <a>System</a>
                </li>
                <li class="active">
                    <a href="{!! url('/system') !!}"> <strong>Home</strong></a>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
@endsection