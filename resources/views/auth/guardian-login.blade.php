@extends('layouts.app')
@section('main_wrapper')
    <div class="account-content">
        <div class="login-wrapper">
            <div class="login-content">
                <div class="login-userset">
                    <div class="login-logo">
                        <img src="{{ asset('assets/img/logo_b.png') }}" style="width: 300px;" alt="img" />
                    </div>
                    <div class="login-userheading">
                        <h3>Staff Sign In</h3>
                        <h4>Please login to your account</h4>
                    </div>
                    <form action="{{ route('store.guardian-login') }}" method="POST">
                        @csrf
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="text" placeholder="Enter your email address" name="email"
                                    :value="old('email')" required />
                                <img src="{{ asset('assets/img/icons/mail.svg') }}" alt="img" />
                            </div>
                            @error('email')
                                <div class="text text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" placeholder="Enter your password" name="password"
                                    required autocomplete="current-password" />
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                            @error('password')
                                <div class="text text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="form-login">
                        <div class="alreadyuser">
                            <h4>
                                <a href="{{ route('password.request') }}" class="hover-a">Forgot Password?</a>
                            </h4>
                        </div>
                    </div> --}}
                        <div class="form-login">
                            <button class="btn"
                                style="width: 100%; padding:10px 0; margin-top:30px; background:rgb(33, 33, 202);color:#fff"
                                type="submit" name="login">Sign In</button>
                            {{-- <a class="btn btn-login" href="index.html">Sign In</a> --}}
                        </div>
                    </form>
                </div>
            </div>
            <div class="login-img">
                <img src="{{ asset('assets/img/guardian.jpg') }}" alt="img" />
            </div>
        </div>
    </div>
@endsection
