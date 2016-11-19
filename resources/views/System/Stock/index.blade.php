@extends('layouts.UI_Admin.app')
@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Stock</h2>
            <ol class="breadcrumb">
                <li>
                    <a>System</a>
                </li>
                <li class="active">
                    <a href="{!! url('/system/stock') !!}"> <strong>Stock</strong></a>
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

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Stock Table</h5>
                        <div class="ibox-tools">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Catgory</th>
                                    <th></th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">X</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">X</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {!! Html::script('js/plugins/dataTables/datatables.min.js') !!}
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength:15,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},
                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>
@endsection
