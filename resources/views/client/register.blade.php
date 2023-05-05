<x-userLoginHeader />


<div class="row w-100 mx-0">
    <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo text-center">
                <!-- <img src="{{asset('images/logo-icon.png')}}" alt="logo"> -->
                <p><strong> APMASS CRM </strong></p>
            </div>
            <h4></h4>
            <h6 class="font-weight-light text-center">Sign Up to continue.</h6>

            @include('commons.session-msg') 

            <form action="{{ route('client.register.action') }}" method="post" class="pt-3">
                @csrf

                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="name" id="exampleInputEmail1"
                        placeholder="Your Name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1"
                        placeholder="Your Email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-lg" name="phone" id="exampleInputEmail1"
                        placeholder="Phone No." value="{{ old('phone') }}">
                    @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="country" id="exampleInputEmail1"
                        placeholder="Country" value="{{ old('country') }}">
                    @if ($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="city" id="exampleInputEmail1"
                        placeholder="City" value="{{ old('city') }}">
                    @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>



                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password"
                        id="exampleInputPassword1" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="conf_password"
                        id="exampleInputPassword1" placeholder="Confirm Password">
                    @if ($errors->has('conf_password'))
                    <span class="text-danger">{{ $errors->first('conf_password') }}</span>
                    @endif
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                        UP</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">

                    </div>

                </div>

                <div class="text-center mt-4 font-weight-light">
                    Already have an account? <a href="{{ route('client.login') }}" class="text-primary">Login</a>
                </div>

            </form>
        </div>
    </div>
</div>


<x-userLoginFooter />