{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit_User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: white;
        }

        input,
        select,button {
            height: 60px;
        }
        a {
            text-decoration: 0;
        }
    </style>
</head>

<body> --}}

@extends('layouts.admin')

@section('content')
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <section class="gradient-custom">
        <form action="{{ route('users.update',$users->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div style="display:flex; justify-content:space-between;margin: 30px;">
                <h4>Modifier un utilisateur</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/users/update') }}"
                            id="lien">Utilisateur</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier un utilisateur</li>
                    </ol>
                </nav>

            </div>
            <div class="card bg-light" id="mybutton">
                <div class="card-header bg-secondary">

                    <div class="card-title">
                        <div class="d-flex justify-content-between ">
                            <h4 class="text-center text-light pt-3"><i class="bi bi-pen-fill text-warning me-2"></i>Modifier
                                l'utilisateur : {{ $users->firstName }} </h4>
                            <a href="{{ url('/users/list_user') }}" id="mybutton" class="btn btn-primary mt-2">
                                <i class="bi bi-arrow-return-left me-2"></i>
                                Retour
                            </a>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-around mt-4">
                    <div>
                        <label for="myinput" class="form-label">
                            <h4>Nom</h4>
                        </label>
                        <input type="text" name="firstName" class="form-control" id="myinput"
                            value="{{ $users->firstName }}" style="width: 850px;">
                    </div>
                    <div>
                        <label for="myinput" class="form-label">
                            <h4>Prenom</h4>
                        </label>
                        <input type="text" name="lastName" class="form-control" id="myinput"
                            value="{{ $users->lastName }}" style="width: 850px;">
                    </div>
                </div>

                <div class="d-flex justify-content-around mt-4">
                    <div>
                        <label for="myinput">
                            <h4>Genre</h4>
                        </label>
                        <select class="form-select" name="gender" id="myinput" value="{{ $users->gender }}"
                            style="width: 850px;">
                            <option selected disabled>selectionner votre genre</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Féminin</option>
                        </select>
                    </div>
                    <div>
                        <label for="myinput">
                            <h4>Role</h4>
                        </label>
                        <select class="form-select" name="role_id" id="myinput"
                            style="width: 850px;">
                            <option value="" selected disabled>Selectionner</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}" class="form-control">{{ $role->role_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="myinput" class="form-label">
                        <h4 class="ms-3">Téléphone</h4>
                    </label>
                    <input type="number" name="phoneNumber" class="form-control" id="myinput"
                        value="{{ $users->phoneNumber }}" style="width: 1722px; margin-left:13px;">
                </div>

                <div class="mt-4 justify-content-between d-flex mb-4">
                    <button type="reset" id="mybutton" class="btn btn-danger button ms-3">
                        <i class="bi bi-backspace-fill me-2"></i>Annuler
                    </button>

                    <button type="submit" id="mybutton" class="btn btn-warning button me-3">
                        <i class="bi bi-pencil-fill me-2 button "></i>modifier
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection
{{-- </body>

</html> --}}
