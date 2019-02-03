@include('layouts.head')





       <div class="card-authentication2 mx-auto my-5">
        <div class="card-group">
            <div class="card mb-0">
               <div class="bg-signin2"></div>
                <div class="card-img-overlay rounded-left my-5">
                 <h2 class="text-white">Lorem</h2>
                 <h1 class="text-white">Ipsum Dolor</h1>
                 <p class="card-text text-white pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
             </div>
            </div>

            <div class="card mb-0 ">
                <div class="card-body">
                    <div class="card-content p-3">
                        <div class="text-center">
                            <img src="assets/images/logo-icon.png" alt="logo icon">
                        </div>
                     <div class="card-title text-uppercase text-center py-3"><b>Leaser's </b>Sign In</div>
                       <form method ="POST" action="{{route('leaser.login') }}">
                         @csrf
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                               <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                                 <input type="email" id="exampleInputUsername email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email-Address" name="email" value="{{ old('email') }}" required autofocus>
                                 
                                 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                 <div class="form-control-position">
                                    {{-- <i class="icon-user"></i> --}}
                                </div>
                           </div>
                          </div>
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="password" class="sr-only">Password</label>
                              <input type="password" id="exampleInputPassword password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  placeholder="Password" name="password" required>
                              <div class="form-control-position">
                                 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                  {{-- <i class="icon-lock"></i> --}}
                              </div>
                           </div>
                          </div>
                          <div class="form-row mr-0 ml-0">
                          <div class="form-group col-6">
                              <div class="icheck-material-primary">
                               <input type="checkbox" id="user-checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                               <label for="remember">Remember me</label>
                             </div>
                            </div>
                            @if (Route::has('password.request'))
                            <div class="form-group col-6 text-right">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    </a>
                                        {{ __('Forgot Your Password?') }}
                                </div>
                                @endif


                            
                             
                        </div>
                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign In</button>
                         <div class="text-center pt-3">
                        <p>or Sign in with</p>

                        <div class="form-row mt-4">
                          <div class="form-group mb-0 col-6">
                           <button type="button" class="btn bg-facebook text-white btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
                         </div>
                         <div class="form-group mb-0 col-6 text-right">
                          <button type="button" class="btn bg-twitter text-white btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
                         </div>
                        </div>

                        <hr>
                        <p class="text-dark">Do not have an account? <a href="authentication-signup2.html"> Sign Up here</a></p>
                        </div>
                    </form>
                 </div>
                </div>
            </div>
         </div>
        </div>
    
     
    
    </div><!--wrapper-->

@include('layouts.footer')

