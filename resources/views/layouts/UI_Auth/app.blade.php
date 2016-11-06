<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yashiba | Login</title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/style.css') !!}

</head>

<body class="gray-bg">
<div class="loginColumns animated fadeInDown">
    @yield('content')
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Yashiba Trading Company
        </div>
        <div class="col-md-6 text-right">
            <small> 2016</small>
        </div>
    </div>
</div>

</body>

</html>