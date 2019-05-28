<div class="modal-header">
    <h5 class="modal-title">Reset Password</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="form-horizontal" role="form" method="POST" action="{{ url(route('submit-reset-email')) }}">
    {{ csrf_field() }}
    <div class="modal-body">
        <p class="l-text pb-4">
            Enter the email address associated with your account, and we’ll email you a link to reset your password.
        </p>
        <div class="row no-gutters">
            <div class="col-12 px-0 mb-3">
                <label class="mb-1">Email Address:</label>
                <input type="email" name="email" class="form-control" required placeholder="" id="" value="">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-search col-12 col-md-5">Send Reset Link</button>
        {{-- <button type="button" data-target="auth-login" class="close modal-reset btn btn-secondary brd-clr col-md-5">Cancel</button> --}}
    </div>
</form>     