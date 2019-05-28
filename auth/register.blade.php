@extends('layouts.base-front')

@section('content')
<div class="container-fluid profile-banner">    
    <div class="container row offset-lg-2">
        <div class="col-12 col-md-8 col-lg-4 sign-form">
            <header>
                <h1>Sign Up</h1>
            </header>

            <div id="" class="subscr-popup d-none d-md-block">
                <p class="mb-1"><b>Recommended</b></p>
                <ul class="list-unstyled list-grid-one text-left">
                    <li class="mb-1">
                        <svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-recomm1"></use></svg>
                        We keep it private
                    </li>
                    <li class="mb-1">
                        <svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-recomm2"></use></svg>
                        Quick sign in - no password
                    </li>
                    <li class="mb-1">
                        <svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-recomm3"></use></svg>
                        Share only with permission
                    </li>
                </ul>
                <div class="arrow" x-arrow></div>
            </div>

            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group row no-gutters">
                    <div class="col-12 col-md-6 pr-1 mb-3">
                        <label class="mb-1">
                            @lang('common.first_name')
                            <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="firstName" value="{{ old('firstName') }}" required>
                            @if ($errors->has('firstName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstName') }}</strong>
                                </span>
                            @endif    
                        </label>
                    </div>
                    <div class="col-12 col-md-6 pl-1 mb-3">
                        <label class="mb-1">
                            @lang('common.last_name')
                            <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="lastName" value="{{ old('lastName') }}" required>
                            @if ($errors->has('lastName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastName') }}</strong>
                                </span>
                            @endif  
                        </label>
                    </div>
                    <div class="col-12 px-0 mb-3">
                        <label class="mb-1 form-group">
                            @lang('common.email_address')
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif     
                        </label>
                    </div>
                    <div class="col-12 px-0 mb-3">
                        <label class="mb-1 form-group">
                            @lang('common.password')
                            <input type="password" class="form-control" id="" aria-describedby="" placeholder="" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                    <div class="col-12 px-0 mb-4">
                        <label class="mb-1 form-group">
                            @lang('common.confirm_password')
                            <input type="password" class="form-control" id="" aria-describedby="" placeholder="" name="password_confirmation" required>
                        </label>
                    </div>
                    <div class="col-12 mb-1">
                        <button type="submit" class="btn btn-search col">@lang('common.sign_up')</button>
                    </div>
                </div>
                <div class="col-12 px-2 text-center">
                    <label>Already have a BookSeats.com account? <a href="{{ route('login') }}" class="underline">@lang('common.sign_in_instead')</a></label>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
