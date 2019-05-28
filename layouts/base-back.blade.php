<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>BookSeats.com</title>

	<link rel="stylesheet" href="/css/app.css" type="text/css" />
</head>
<body>
	<section id="page" data-page="{{isset($page) ? $page : ''}}" class="site-wrapper">
		@include('modules.header-back')
		@yield('content')
		@include('modules.footer-back')
		<div class="modal fade" id="mdl_errorMessage" tabindex="-1" role="dialog" data-backdrop="false" data-keyboard="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <h4 id="err_title"></h4>
                        <div id="err_message" class="pb-4 pt-1 err-message">This is some text for the error message.</div>
                        <div id="err_buttons" class="justify-content-center">
                        	<button type="button" class="col-3" data-dismiss="modal" aria-label="Close">Solid</button>
                            <button type="button" class="col-3" data-dismiss="modal" aria-label="Close">border</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<script src="/js/app.js" type="text/javascript"></script>
</body>
</html>