@extends('layouts.base-front')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row offset-lg-1">
        <div class="col-12 col-md-10 sign-form">
            <header>
                <h1>@lang('common.reset_password')
                </h1>
            </header>
         
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif


            <form class="form-horizontal" role="form" method="POST" action="{{ url(route('submit-reset-email')) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-6 pl-0">@lang('common.email_address')

                    
                        <input id="email" type="email" class="form-control" name="email" style="height:55px;" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                   </label>
                    <button type="submit" class="btn btn-search mt-4">
                        @lang('common.send_password_link')
                    </button>
                </div>
            </form>                
        </div>
    </div>
</div>
@endsection
