{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('admin/bootstrap-5.3.3-dist/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Document</title>

    <style>
        .{
            width: 500px;
            height: 50px;
        }
    </style>

</head>
<body class="bg-light"> --}}

@extends('layouts.admin')

@section('content')
    <div style="display:flex; justify-content:space-between;margin: 30px;">
        <h5>Gestions des utilisateurs</h5>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                <li class="breadcrumb-item">Utilisateur</li>
                <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
            </ol>
        </nav>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card rounded-0 bg-white pb-3 pt-2" style="height: 40vh;">
                    <div class="card-hearder">
                        <form action="{{ url('users/profile_user/{id}') }}">
                            <img style="margin-left: 20%; max-width:550px; max-height:400px;" src="{{ asset('image/homme.png') }}">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card rounded-0">
                    <div class="card-header bg-secondary text-white d-flex justify-content-between">
                        <h2 class="text-center"> <i class="bi bi-info-circle-fill me-2 text-warning"></i>informations personnels</h2>
                        <a href="{{ url('/users/list_user') }}" class="btn btn-primary mt-2" id="mybutton">
                            <i class="bi bi-arrow-return-left me-2"></i>
                            Retour
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5><i class="bi bi-person-fill me-2"></i>Nom : </h5>
                            <h5> {{ Auth::user()->firstName }} </h5>
                        </div>
                        <br>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5><i class="bi bi-person me-2"></i>Prenom : </h5>
                            <h5> {{ Auth::user()->lastName }} </h5>
                        </div>
                        <br>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5><i class="bi bi-gender-ambiguous me-2"></i>Genre : </h5>
                            <h5> {{ Auth::user()->gender }} </h5>
                        </div>
                        <br>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5><i class="bi bi-telephone-fill me-2"></i>Telephone : </h5>
                            <h5> {{ Auth::user()->phoneNumber }} </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card text-center rounded-0">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-between">
                            <h5>Role : </h5>
                            <h5> {{ Auth::user()->role_id }} </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <form action="{{ route('update.password') }}" method="POST">
                    @csrf
                    @if (session('success'))
                        <div class="mb-3">
                            <h3><i class="bi bi-check-circle-fill me-2 text-success"></i>{{ session('success') }}</h3>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <h3><i class="bi bi-x-circle-fill me-2 text-danger"></i>{{ $error }}</h3>
                            @endforeach

                        </div>
                    @endif
                    <div class="card rounded-0">
                        <div class="card-header bg-secondary text-white">
                            <h2> <i class="bi bi-key me-2 text-warning"></i>Modifier mot de passe</h2>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <label for="old_password">
                                    <h5>Ancien mot de passe</h5>
                                </label>
                                <input class="form-control rounded-0" style="max-width: 550px;" type="password" name="old_password" required>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                                <label for="new_password">
                                    <h5>Nouveau mot de passe</h5>
                                </label>
                                <input class="form-control rounded-0" style="max-width: 550px;" type="password" name="new_password" required>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                                <label for="confirm_new_password">
                                    <h5>Confirmation mot de passe</h5>
                                </label>
                                <input class="form-control rounded-0" style="max-width: 550px;" type="password" name="confirm_new_password" required>
                            </div>
                            <button type="submit" class="btn btn-warning text-white rounded-0 mt-3"
                                style="font-size: 20px;">
                                <i class="bi bi-pencil-fill me-2 button "></i>Modifier
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

{{-- <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/datatables.min.js') }}"></script>
    <script src={{ asset('admin/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}></script>
    <script src="{{ asset('admin/jquery-3.7.1.js') }}"></script>

</body>
</html> --}}
