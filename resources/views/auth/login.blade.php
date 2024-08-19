@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card rounded-0 bg-light" style="margin-top: 150px;height:55vh;">
                    <div class="card-header bg-warning text-white" style="font-size: 20px;">
                        <h2>{{ __('Se Connecter') }}</h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3 mt-4">
                                <label for="email" class="col-md-4 col-form-label text-md-end">
                                    <h3>{{ __('Adresse Email') }}</h3>
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control rounded-0 @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">
                                    <h3>{{ __('Mot De Passe') }}</h3>
                                </label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control rounded-0 @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="form-check" style="margin-top: 18px;">
                                    <input style="width: 35px; height:22px;"
                                        class="form-check-input rounded-0 ms-3 me-3 mt-4" type="checkbox" name="remember"
                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label mt-4" for="remember">
                                        <h3>{{ __('Remember Me') }}</h3>
                                    </label>
                                </div>
                                <div style="margin-left: 45vh;">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-warning" href="{{ route('password.request') }}">
                                            <h3>{{ __('Mot De Passe Oublié ?') }}</h3>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 mb-4 offset-md-4">
                                    <button type="submit" class="btn btn-warning rounded-0 text-white">
                                        <h3>{{ __('Se Connecter') }}</h3>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img">
                            <img src="{{ asset('image/img2.jpg') }}">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="card-header text-warning mb-3" style="font-size: 20px;">
                                    <h2>{{ __('Se Connecter') }}</h2>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('login') }}" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="email" class="col-md-4 col-form-label">
                                        {{ __('Adresse Email') }}
                                    </label>
                                    <input id="email" type="email"
                                    class="form-control bg-white rounded-0 @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="col-md-4 col-form-label">
                                        {{ __('Mot De Passe') }}
                                    </label>
                                    <input id="password" type="password"
                                        class="form-control bg-white rounded-0 @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-warning rounded-0 submit px-3">
                                        {{ __('Se Connecter') }}
                                    </button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                    <input type="checkbox" name="remember_me" class="rounded-0" id="remember_me" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember_me" class="form-check-label checkbox-warning mt-2 mb-0">{{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link text-warning" href="{{ route('password.request') }}">
                                            {{ __('Mot De Passe Oublié ?') }}
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
            integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
            data-cf-beacon='{"rayId":"8b58a9965bfc488f","serverTiming":{"name":{"cfL4":true}},"version":"2024.8.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
            crossorigin="anonymous"></script>

    </section>
@endsection
