@extends('layouts.login')

@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <a
          href="../index2.html"
          class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover"
        >
          <h1 class="mb-0"><b>Admin</b>LTE</h1>
        </a>
      </div>
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{route('login')}}" method="post">
            @csrf
          <div class="input-group mb-1">
            <div class="form-floating">
              <input id="email" type="email" name="email" class="form-control" value="" placeholder="" />
              <label for="loginEmail">Email</label>
            </div>
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          </div>
          <div class="input-group mb-1">
            <div class="form-floating">
              <input type="password" id="password" name="password"  class="form-control" placeholder="" />
              <label for="loginPassword">Password</label>
            </div>
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          </div>
          <!--begin::Row-->
          <div class="row">
            <div class="col-8 d-inline-flex align-items-center">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="remember" name="remember" />
                <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        <div class="social-auth-links text-center mb-3 d-grid gap-2">
          {{-- <p>- OR -</p> --}}
          <a href="#" class="btn btn-primary">
            <i class="bi bi-facebook me-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-danger">
            <i class="bi bi-google me-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->
        <p class="mb-1"><a href="#">I forgot my password</a></p>
        <p class="mb-0">
          <a href="{{route('register')}}" class="text-center"> Register a new membership </a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
