@extends('layouts.app')
@section('title')
    تسجيل الدخول
@endsection
@section('content')
    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">
            <div class="text-center fh5co_heading py-2">تسجيل الدخول</div>
        </div>
        {{--<div class="row">--}}
            <div class="col-12 ">
            <form  method="POST" id="fh5co_contact_form" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">البريد الالكترونى</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control fh5co_contact_text_box"  name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
<div style="height: 1px;width: 100%;clear: both"></div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">كلمة السر</label>

                    <div class="col-md-6" >
                        <input id="password" type="password"  class="form-control fh5co_contact_text_box" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div style="height: 1px;width: 100%;clear: both"></div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرنى
                            </label>
                        </div>
                    </div>
                </div>
                <div style="height: 1px;width: 100%;clear: both"></div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            تسجيل الدخول
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            هل نسيت كلمة السر؟
                        </a>
                    </div>
                </div>
            </form>

        </div>
        {{--</div>--}}
    </div>
@endsection
