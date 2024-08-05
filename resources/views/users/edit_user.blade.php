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
        <form action="{{ route('users.store') }}" method="post">
            {!! csrf_field() !!}
            @method('post')
            <div style="display:flex; justify-content:space-between;margin: 30px;">
                <h4>Modifier un utilisateur</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" style="color: black;">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/users/update') }}" style="color: black;">Utilisateur</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/users/list_user') }}" style="color: black;">Liste des utilisateurs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier un utilisateur</li>
                    </ol>
                </nav>

            </div>
            <div class="card bg-light">
                <div class="card-header bg-secondary">
                    <h2 style="color: whitesmoke;">Modifier l'utilisateur : {{ $users->firstName }}</h2>
                </div>
                <div class="card-body" style="display: flex; justify-content:space-around; margin-top:3%;">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">
                            <h4>Nom</h4>
                        </label>
                        <input type="text" name="firstName" class="form-control" id="exampleFormControlInput1"
                            value="{{ $users->firstName }}" style="width: 850px;">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">
                            <h4>Prenom</h4>
                        </label>
                        <input type="text" name="lastName" class="form-control" id="exampleFormControlInput1"
                            value="{{ $users->lastName }}" style="width: 850px;">
                    </div>
                </div>

                <div style="display: flex; justify-content:space-around; margin-top:2%; margin-bottom:25px">
                    <div>
                        <label for="floatingSelect">
                            <h4>Genre</h4>
                        </label>
                        <select class="form-select" name="gender" id="floatingSelect" value="{{ $users->gender }}"
                            style="width: 850px;">
                            <option selected disabled>entrer votre genre</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Féminin</option>
                        </select>
                    </div>
                    <div>
                        <label for="floatingSelect">
                            <h4>Role</h4>
                        </label>
                        <select class="form-select" name="role_id" id="floatingSelect" value="{{ $users->role_id }}"
                            style="width: 850px;">
                            {{-- @foreach ($roles as $role)
                            <option value="{{ $role->value }}" class="form-control">{{ $role->role_name }}</option>
                            @endforeach --}}
                            <option selected disabled>entrer votre role</option>
                            <option value="1">Admin</option>
                            <option value="2">SimpleUser</option>
                        </select>
                    </div>
                </div>
                <div style="margin-left: 35px;">
                    <label for="exampleFormControlInput4" class="form-label">
                        <h4>Téléphone</h4>
                    </label>
                    <input type="text" name="phoneNumber" class="form-control" id="exampleFormControlInput4"
                        value="{{ $users->phoneNumber }}" style="width: 1780px;">
                </div>

                <div style="display: flex; justify-content:space-around; margin-top:2%; margin-bottom:80px;">
                    <div>
                        <button type="button" class="btn btn-primary" style="width: 200px;margin-top:50px;margin-left:10px;"><a href="{{ url('/users/list_user') }}"
                                style="color: black;">Back</a></button>
                    </div>
                    <div>
                        <button type="submit" value="modifier" class="btn"
                            style="width: 200px;margin-top:50px;color: black;background-color:orange;margin-left:1300px;">modifier</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
{{-- </body>

</html> --}}
