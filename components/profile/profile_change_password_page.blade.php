<div class="profile-underline-title">
  <div class="profile-icon-container">
    <div class="profile-icon-round-sm-down">
      <svg class="icon" role="" title="">
        <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-lock-star"></use>
      </svg>
    </div>
  </div>
  @lang('profile.change_password.title')
</div>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

<form class="form-default" role="form" method="POST" action="{{ route('change-password-profile') }}" id="resetPassword">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
  <div class="custom-form-element">
    <div class="row form-row-spacing">
      <label for="current_password" class="col-12">@lang('profile.change_password.label_current_password')</label>
      <div class="col-12">
        <div class="element-container">
          <input id="current_password" placeholder="" type="password" class="form-control" name="current_password" required autocomplete="off" readonly 
            onfocus="this.removeAttribute('readonly');" >
          @if ($errors->has('current_password'))
          <div class="error-tool-tip" id="current_passwordError">
            <svg class="icon" role="" title="">
                <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-exclamation-circle"></use>
            </svg> {{ $errors->first('current_password') }}
          </div>
          @endif					
        </div>	
      </div>
    </div>
    <div class="row form-row-spacing">
      <label for="password" class="col-12">@lang('profile.change_password.label_new_password') <!-- <span class="label-secondary-text">(Must be at least 8 characters)</span> --> </label>
      <div class="col-12">
        <div class="element-container">
          <input id="password" type="password" class="form-control" name="password" required autocomplete="off" readonly 
            onfocus="this.removeAttribute('readonly');" >
          @if ($errors->has('password'))
          <div class="error-tool-tip" id="passwordError">
            <svg class="icon" role="" title="">
                <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-exclamation-circle"></use>
            </svg> {{ $errors->first('password') }}
          </div>
          @endif					
        </div>	
      </div>
    </div>

    <div class="row form-row-spacing">
      <label for="password_confirm" class="col-12">@lang('profile.change_password.label_confirm_password')</label>
      <div class="col-12">
        <div class="element-container">
          <input id="password_confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off" readonly 
            onfocus="this.removeAttribute('readonly');" >
          @if ($errors->has('password_confirmation'))
          <div class="error-tool-tip" id="password_confirmError">
            <svg class="icon" role="" title="">
                <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-exclamation-circle"></use>
            </svg> {{ $errors->first('password_confirmation') }}
          </div>
          @endif	
        </div>	
      </div>
    </div>
    <div class="profile-form-footer text-center row">
      <div class="col-12 col-sm-6 col-lg-5">
        <button type="button" class="w-100 btn btn-lg btn-low-importance-gradient" onClick="document.location.href='{{ route('dashboard') }}'">@lang('profile.back_to_dashboard')</button>              
      </div>            
      <div class="col-12 col-sm-6 col-lg-5">
        <button class="w-100 btn btn-lg btn-primary-gradient">@lang('common.buttons.update')</button>
      </div>
    </div>	
  </div>
</form>
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) { 
    if(document.getElementById("current_passwordError")){
      window.scrollTo(0, 500);
      document.getElementById('current_password').focus();
    }
    if(document.getElementById("passwordError"))
    {
      window.scrollTo(0, 500);        
      document.getElementById('password').focus();
    }
    if(document.getElementById("password_confirmError")){
      window.scrollTo(0, 500);        
      document.getElementById('password_confirm').focus();
    }           
  });
</script>