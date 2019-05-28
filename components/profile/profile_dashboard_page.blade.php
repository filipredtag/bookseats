<div class="text-center">
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	<div class="profile-welcome-title">
		<div class="profile-pic-container hidden-md-up">
	    	<div class="profile-pic">
	    		<img class="" src="https://s3.amazonaws.com/itravel2000/img/placeholders/profile-default-avatar.png" alt="">
	    	</div>
		</div>
		@lang('profile.dashboard.greeting') @if ($signedInUser) {{ $signedInUser->FullName }} @endif
	</div>
	<p class="profile-static-text mb-5">
		@lang('profile.dashboard.welcome')
	</p>
	{{-- <div class="profile-promo-title">{{ @lang('profile.dashboard.checkout_member_promo') }}</div>
	<img class="mb-5 mw-100" src="https://s3.amazonaws.com/itravel2000/img/placeholders/profile-promo-placeholder.png" alt=""> --}}
	{{-- <div class="profile-and-more-text">And More!</div> --}}
	<div class="icon-grid-section mb-5">
		<div class="row justify-content-around">
			{{-- <a class="col-4 col-md-3" href="{{ route('member-promotions') }}">
				<svg class="icon tag" role="" title="">
				    <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-tag"></use>
				</svg>
				<div>@lang('common.member_promotions')</div>
			</a>
			<a class="col-4 col-md-3" href="{{ route('member-contests') }}">
				<svg class="icon" role="" title="">
				    <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-trophy"></use>
				</svg>
				<div>@lang('common.member_contests')</div>
			</a> --}}
			<a class="col-4 col-md-3" href="{{ route('view-profile') }}">
				<svg class="icon" role="" title="">
				    <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-user"></use>
				</svg>
				<div>@lang('common.personal_info')</div>
			</a>
			<a class="col-4 col-md-3" href="{{ route('member-price-alerts') }}">
				<svg class="icon" role="" title="">
				    <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-bell"></use>
				</svg>
				<div>@lang('common.price_alerts')</div>
			</a>			
		</div>	
		<div class="row justify-content-around">
			{{-- <a class="col-4 col-md-3" href="{{ route('member-bookings') }}">
				<svg class="icon" role="" title="">
				    <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-suitcase"></use>
				</svg>
				<div>Manage Your Trips</div>
			</a>
			<a class="col-4 col-md-3" href="{{ route('member-newsletter') }}">
				<svg class="icon" role="" title="">
				    <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-mail"></use>
				</svg>
				<div>Newsletter Preferences</div>
			</a> --}}
			
		</div>	
	</div>
</div>
