         <div class="modal-header">
            <h5 class="modal-title">Log In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="col-12 px-0 my-1 sign-form">
                <button type="button" id="" class="btn btn-secondary col-12 text-center mb-3">
                    <img src="https://google-developers.appspot.com/identity/sign-in/g-normal.png" class="" />
                    Log In with Google
                </button>
                <button type="button" id="" class="btn fb-btn col-12 mb-2">
                    <svg class="icon icon-box-icon icon-fb-sign"><use xlink:href="/img/symbol-defs.svg#icon-fb"></use></svg>
                    Log In with Facebook
                </button>

                <div id="" class="">
                    <p class="mb-1"><b>Recommended</b></p>
                    <ul class="list-unstyled list-inline">
                        <li class="mb-1 mb-1 list-inline-item">
                            <svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-recomm1"></use></svg>
                            We keep it private
                        </li>
                        <li class="mb-1 mb-1 list-inline-item">
                            <svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-recomm2"></use></svg>
                            Quick sign in - no password
                        </li>
                        <li class="mb-1 mb-1 list-inline-item">
                            <svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-recomm3"></use></svg>
                            Share only with permission
                        </li>
                    </ul>
                </div>

                <hr class="split" />

                <form role="form" method="POST" action="{{ url('/login') }}" novalidation>
                {{ csrf_field() }}
                    <div class="form-group row no-gutters">
                        <div class="col-12 px-0 mb-3">
                            <label class="mb-1">Email Address:</label>
                            <input type="email" name="email" required class="form-control" placeholder="" id="" value="">
                        </div>
                        <div class="col-12 px-0 mb-0">
                            <label class="mb-1">Password:</label>
                            <input type="password" name="password" required class="form-control" placeholder="" id="" value="">
                        </div>

                        
                        <button type="button" class="btn-link pass-link modal-view-toggle mb-2" data-target="auth-reset">Forgot your password?</button>

                        <div class="col-12 mb-1">
                            <button type="submit" class="btn btn-search col">Log In</button>
                        </div>
                        <div class="col-12 px-2 pt-1 text-center">
                            <label>Don't have an account? <a href="#" class="underline modal-view-toggle" data-target="auth-register">Sign up for free</a></label>
                        </div>
                    </div>
                </form>
            </div>
         </div>

@section('scripts')

<script>
  
</script>