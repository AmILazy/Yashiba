<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Yashiba | Dashboard</title>

    <!-- Boostrap -->

    {!! Html::style('css/bootstrap.min.css') !!}
    <!-- font-awesome -->
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    <!-- Toastr style -->
    {!! Html::style('css/plugins/toastr/toastr.min.css') !!}
    <!-- Gritter -->
    {!! Html::style('js/plugins/gritter/jquery.gritter.css') !!}
    <!-- animated -->
    {!! Html::style('css/animate.css') !!}
    <!-- style css -->
    {!! Html::style('css/style.css') !!}
    <!-- main css -->
    {!! Html::style('css/main.css') !!}
    <!-- Data Table -->
    {!! Html::style('css/plugins/dataTables/datatables.min.css') !!}


</head>

<body>
<div id="wrapper">
    <!-- side nav bar -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <!-- sidebar-collapse -->
        <div class="sidebar-collapse">
            <!-- metismenu -->
            <ul class="nav metismenu" id="side-menu">
                <!-- nav-header -->
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg"/>
                            </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold">{{ Auth::user()->name }}</strong><b class="caret"></b>
                                    </span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="/profile">Profile</a></li>
                            <li><a href="{!! url('logout') !!}">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        <a href="profile">
                            <p><i class="fa fa-user" ></i></p>
                        </a>
                    </div>
                </li><!-- /nav-header -->

                <!-- Main item -->
                <li class="active">
                    <a href="/system"><i class="fa fa-th-large"></i> <span class="nav-label">Menu</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="/system">Home</a></li>
                        <li><a href="/system/customer">Customer</a></li>
                        <li><a href="/system/inventory">Inventory</a></li>
                        <li><a href="/system/dispatch">Dispatch</a></li>
                        <li><a href="/system/orders">Orders</a></li>
                        <li><a href="/system/stock">Stock</a></li>

                    </ul>
                </li><!-- /Main item -->
            </ul><!-- /metismenu -->
        </div><!-- /sidebar-collapse -->
    </nav><!-- /side nav bar -->

    <!-- page-wrapper -->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to Yashiba</span>
                    </li>

                    <!-- Notification -->
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{!! url('logout') !!}">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>

        @yield('page-heading')

        @yield('content')



    </div><!-- /page-wrapper -->
</div><!-- page-wrapper -->

<!-- Mainly scripts -->
{!! Html::script('js/jquery-2.1.1.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/plugins/metisMenu/jquery.metisMenu.js') !!}
{!! Html::script('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}

<!-- Flot -->
{!! Html::script('js/plugins/flot/jquery.flot.js') !!}
{!! Html::script('js/plugins/flot/jquery.flot.tooltip.min.js') !!}
{!! Html::script('js/plugins/flot/jquery.flot.spline.js') !!}
{!! Html::script('js/plugins/flot/jquery.flot.resize.js') !!}
{!! Html::script('js/plugins/flot/jquery.flot.pie.js') !!}
<!-- Peity -->
{!! Html::script('js/plugins/peity/jquery.peity.min.js') !!}
{!! Html::script('js/demo/peity-demo.js') !!}

<!-- Custom and plugin javascript -->
{!! Html::script('js/inspinia.js') !!}
{!! Html::script('js/plugins/pace/pace.min.js') !!}

<!-- jQuery UI -->
{!! Html::script('js/plugins/jquery-ui/jquery-ui.min.js') !!}

<!-- GITTER -->
{!! Html::script('js/plugins/gritter/jquery.gritter.min.js') !!}

<!-- Sparkline -->
{!! Html::script('js/plugins/sparkline/jquery.sparkline.min.js') !!}

<!-- Sparkline demo data  -->
{!! Html::script('js/demo/sparkline-demo.js') !!}
<!-- Toastr -->
{!! Html::script('js/plugins/toastr/toastr.min.js') !!}

@yield('js')

</body>
</html>
