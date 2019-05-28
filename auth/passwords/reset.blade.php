@extends('layouts.base-front')

@section('content')
<div class="container">
    <div class="row offset-lg-1">
        <div class="col-12 col-md-10 sign-form">
                <header>
                    <h1>@lang('common.reset_password')</h1>
                </header>

               
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url(route('submit-reset-password')) }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 pl-0 control-label">@lang('common.email_address')

                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </label>
                           
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 pl-0 control-label">@lang('common.password')

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </label>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 pl-0 control-label">@lang('common.confirm_password')
                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </label>
                            <button type="submit" class="btn btn-search mt-4">
                                @lang('common.reset_password')
                            </button>
                        </div>


                    </form>
               
            
        </div>
    </div>
</div>
@endsection
{{-- 

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
        </div> --}}
