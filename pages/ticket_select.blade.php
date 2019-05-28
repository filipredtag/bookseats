@extends('layouts.base')

@section('content')

	@include('modules.breadcrumbs')

	<div class="container">
		<div class="row gutter-20">
			<div class="col-12 container-iframe">
				<iframe src="https://staging-bookseats.fanxchange.com/events/145571995" frameborder="0"></iframe>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		window.addEventListener("message", function(event) {
			// if (event.origin !=='https://bookseats.fanxchange.com') {
			// 	return;
			// }
			var message = event.data;
			if (message && message.event) {
				switch(message.event) {
					case 'ticket-selected':// The ticket object can be accessed at`message.data`.
						console.log(message.data);
						break;
					default:
						break;
				}
			}
		});
	</script>

@stop