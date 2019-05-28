@extends('layouts.base-front')

@section('content')

<div class="container-fluid profile-banner">    
    <div class="container row offset-lg-2">
        <div class="col-12 col-md-8 col-lg-4 sign-form">
            @if (session('status'))
                <div class="alert alert-warning">
                    {!! session('status') !!}
                </div>
            @endif   
            <header>
                <h1>@lang('profile.popup.signin-with-email')</h1>
            </header>
            <form role="form" method="POST" action="{{ url('/login') }}" novalidation>
                {{ csrf_field() }}
                <div class="form-group row no-gutters">
                    <div class="col-12 px-0 mb-3">
                        <label class="mb-1 form-group">
                            @lang('profile.popup.enter-your-email-address')
                            <input type="email" class="form-control" id="email" aria-describedby="" placeholder="" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </label>
                    </div>
                    <div class="col-12 px-0 mb-1">
                        <label class="mb-1 form-group">
                            @lang('profile.popup.enter-your-password')
                            <input type="password" class="form-control" id="password" aria-describedby="" placeholder="" name="password" required>
                        </label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif      
                    </div>
                    <a href="{{ route('reset') }}" class="underline mb-3 pb-3">@lang('profile.popup.forgot-password')</a>

                    <div class="col-12 mb-1">
                        <button type="submit" class="btn btn-search col">@lang('profile.signin')</button>
                    </div>
                </div>
                <div class="col-12 px-2 text-center">
                    <label>@lang('profile.popup.dont-have-account') <a href="{{ route('register') }}" class="underline">@lang('profile.popup.create-account')</a></label>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection




