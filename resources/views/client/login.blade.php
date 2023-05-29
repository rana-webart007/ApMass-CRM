<x-userLoginHeader />


<div class="row w-100 mx-0">
    <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo text-center">
                <img src="{{asset('images/logo.jpg')}}" alt="logo">
                <!-- <p><strong> APMASS CRM </strong></p> -->
            </div>
            <h4></h4>
            <h6 class="font-weight-light text-center">Sign in to continue.</h6>

            @include('commons.session-msg')

            <form class="pt-3" action="{{ route('client.login.action') }}" method="post">
                @csrf

                <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1"
                        placeholder="Email Id" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1"
                        placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                        href="#">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">

                    </div>
                    <a href="{{ route('client.forgot.password') }}" class="auth-link text-black">Forgot password?</a>
                </div>

                <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="{{ route('client.register') }}" class="text-primary">Create</a>
                </div>

            </form>
        </div>
    </div>
</div>


<x-userLoginFooter />