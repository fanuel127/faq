@extends('layouts.app')

@section('content')
    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Déconnecté !',
                text: "{{ session('status') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    <section class="ftco-section rounded-0">
        <section class="ftco-section">
            <div class="container py-0.25" style="margin-top: -11vh;">
                <div class="row justify-content-center rounded-0">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="3000">
                                        <img src="{{ asset('image/img3.jpg') }}" height="600" class="d-block">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{ asset('image/img2.jpg') }}" height="600" class="d-block">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image/img1.jpg') }}" height="600" class="d-block">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                            </div>
                            <div class="login-wrap p-4 p-md-4">
                                <div class="d-flex">
                                    <div class="card-header text-warning mb-3" style="font-size: 20px;">
                                        <h2>{{ __('Se Connecter') }}</h2>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="signin-form">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="email" class="col-md-4 col-form-label">
                                            <h5>{{ __('Adresse Email') }}</h5>
                                        </label>
                                        <input id="email" type="email"
                                            class="form-control bg-white rounded-0 @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password" class="col-md-4 col-form-label">
                                            <h5>{{ __('Mot De Passe') }}</h5>
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
                                    <div class="form-group pt-2">
                                        <button type="submit" class="form-control btn btn-warning rounded-0 submit px-3">
                                            {{ __('Se Connecter') }}
                                        </button>
                                    </div>
                                    <div class="form-group pt-3">
                                        {{-- <div class="w-50 text-left">
                                            <input type="checkbox" name="remember_me" class="rounded-0" id="remember_me"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember_me"
                                                class="form-check-label checkbox-warning mt-2 mb-0">{{ __('Remember Me') }}
                                            </label>
                                        </div> --}}
                                        <div class="w-50">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link text-warning"
                                                    href="{{ route('password.request') }}">
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
