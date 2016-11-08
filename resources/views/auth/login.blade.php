@extends('layouts.UI_Auth.app')

@section('content')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>Welcome to Yashiba Trading Company</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>

            <form class="form-horizontal m-t" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary block full-width m-b">
                            <i class="fa fa-btn fa-sign-in"></i> Login
                        </button>
                    </div>
                </div>
                <a href="{!! url('/forget/password') !!}}"><small>Forgot password?</small></a>
            </form>

            <p class="m-t"> <small>Yashiba Trading Company 3 &copy; 2017</small> </p>
        </div>
    </div>
@endsection
