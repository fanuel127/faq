@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

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
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

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

    <!-- Login 6 - Bootstrap Brain Component -->
<<<<<<< Updated upstream
    <section class=" mt-5 p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card ">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3 class="text-center text-dark fw-bold "> Se Connecte</h3>
=======
    <style>
        
        .card {
            border-radius: 0;
            height: 70vh;
            color: black;
        }
     
      body{
           background-color: whitesmoke;

      }
      .card-body{
        background-color: warning;

      }
        
    </style>
    <section >
        <div class="container  mt-5 p-3 p-md-4 p-xl-5 " >
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card  " >
                        <div class="card-body  p-md-5 ">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="mb-5 fs-4 fw-bold"style=" color:black;">
                                        <h2>Se Connecter</h2>
>>>>>>> Stashed changes
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="">
                                @csrf
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-group mb-3">

<<<<<<< Updated upstream
                                     
                                            {{-- <label for="email" class="form-label">Adress Email</label> --}}
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus placeholder="Adress Email">
                                            @error('email')
=======
                                            {{-- <input  type="email"  class="form-control border-radius:0; @error('email') is-invalid @enderror"
                                                name="email" id="email" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus>
                                            <label for="email" class="form-label">Email</label>
                                            --}}
                                        
                                            <label for="email" class="form-label">
                                                <h5></h5>
                                            </label>
                                            <input type="email" name="email" class="form-control 
                                             @error('email') is-invalid @enderror"
                                                id="email" value="{{ old('email') }}"  placeholder="Adresse Email" required
                                             autocomplete="email" autofocus>
                                             {{-- <label for="email" class="form-label">
                                                <h5>Adresse Email</h5> --}}
                                            </label>
                                                @error('email')
>>>>>>> Stashed changes
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
<<<<<<< Updated upstream
                                    <div class="col-12">
                                        <div class="form-group mb-3">

                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="mot de passe">
                                            {{-- <label for="password" class="form-label"><h4>mot de passe</h4></label> --}}

                                            @error('password')
=======
                                    {{-- <div class="col-12">
                                        <div class="form-group mb-3">
                                            <div id="roleModal" >
                                                                                                                                          
                                                <select  class="form-select @error('role_id') is-invalid @enderror" name="role_id" id="myinput" required >                                             
                                                   <option selected disabled >selectionner votre role</option>
                                                    <option value="1" >Admin</option>
                                                    <option value="2" >Gestionaire</option>
                                                
                                                    </label>
                                                </select>
                                            </div>
                                            @error('role_id')
>>>>>>> Stashed changes
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password"  placeholder="Mot de passe">
                                                {{-- <label for="password" class="form-label"> <h5>Mot de passe</h5></label> --}}

                                              @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex gap-2 justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input " type="checkbox" value=""
                                                    {{ old('remember') ? 'checked' : '' }} name="rememberMe"
                                                    id="rememberMe"style=" color:orange;" >
                                                <label class="form-check-label text-secondary" for="rememberMe">
                                                    Rester connecté
                                                </label>
                                                <label class="form-check-label" for="remember">
                                            </div>
                                            <a class="btn btn-link"class="link-warning text-decoration-none"
                                                href="{{ url('password/reset/{token}') }}">

                                            </a>
                                            @if (Route::has('password.request'))
<<<<<<< Updated upstream
                                                <a class="btn btn-link" id="href" href="{{ url('password/reset/{token}') }}">
=======
                                                <a class="btn btn-link"style=" color:orange;" href="{{ url('password/reset/{token}') }}">
>>>>>>> Stashed changes
                                                    Mot de passe oublié?
                                                </a>
                                        </div>
                                    </div>
                                    <div class="col-12">
<<<<<<< Updated upstream
                                        <div class="d-grid" >
                                            <button class="btn bsb-btn-2xl btn-warning" id="btn" type="submit" style="color:white; "><h5>Connecte</h5></button>
=======
                                        <div class="d-grid" >                                       
                                             <button class="btn bsb-btn-2xl btn-warning" style="border-radius:0px;" type="submit" ><h5 style="color:white; ">connecter</h5></button> 
>>>>>>> Stashed changes
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
