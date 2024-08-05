{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details_User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        p,
        th {
            font-size: 40px;
        }

        body {
            background-color: rgb(62, 61, 61);
        }
        .col-6 {
            margin-left: 26%;
            margin-top: 7%;
        }
        button {
            margin-left: 20%;
        }
    </style>
</head>

<body> --}}

@extends('layouts.admin')

@section('content')
    <section class="gradient-custom">
        <div style="display:flex; justify-content:space-between;margin: 30px;">
            <h4>Details d'un utilisateur</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" style="color: black;">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/users/show_user') }}" style="color: black;">Utilisateur</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/users/list_user') }}" style="color: black;">Liste des utilisatuers</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Details d'un utilisateur</li>
                </ol>
            </nav>

        </div>
        <div class="card bg-light">
            <div class="card-header bg-secondary">
                <h2 style="color: whitesmoke;">Informations de l'utilisateur : {{ $users->firstName }} </h2>
            </div>
            <div class="card-body">
                <h3> Id : <b> {{ $users->id }}</b> </h3>
                <br>
                <h3> <b> {{ $users->firstName }}</b> <b> {{ $users->lastName }}</b> </h3>
                <br>
                <h3> Genre : <b> {{ $users->gender }}</b> </h3>
                <br>
                <h3> <i class="bi bi-envelope-fill"></i> : <b> {{ $users->email }}</b> </h3>
                <br>
                <h3> <i class="bi bi-telephone-fill"></i> : <b> {{ $users->phoneNumber }}</b> </h3>
                <br>
                <h3> Role : <b> {{ $users->role_id === 1 ? 'Admin' : 'Gestionnaire' }}</b> </h3>
                <br>
                <h3> <button type="button" class="btn btn-lg btn-warning" style="width: 400px ;">
                        <a href="{{ url('/users/list_user') }}" style="color: black;text-decoration:0;">
                            Retour
                        </a>
                    </button>
                </h3>
            </div>
        </div>
    </section>
@endsection
{{-- </body>

</html> --}}
