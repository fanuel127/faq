{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add_User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: white;
        }
        a {
            text-decoration: 0;
        }

        input,
        select,
        button {
            height: 60px;
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
            <div class="card-body">
                <label for="exampleFormControlInput1" class="form-label">
                    <h5>Nom<span class="text-danger">*</span></h5>
                </label>
                <input type="text" name="firstName" class="form-control" id="exampleFormControlInput1">


                <label for="floatingSelect">
                    <h5>Genre<span class="text-danger">*</span></h5>
                </label>
                <select class="form-select" name="gender" id="floatingSelect">
                    <option selected disabled>entrer votre genre</option>
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Féminin</option>
                </select>

                <label for="exampleFormControlInput1" class="form-label">
                    <h5>Prenom<span class="text-danger">*</span></h5>
                </label>
                <input type="text" name="lastName" class="form-control" id="exampleFormControlInput1">

                <label for="exampleFormControlInput3" class="form-label">
                    <h5>Mot de passe<span class="text-danger">*</span></h5>
                </label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput3">

                <label for="exampleFormControlInput4" class="form-label">
                    <h5>Téléphone<span class="text-danger">*</span></h5>
                </label>
                <input type="text" name="phoneNumber" class="form-control" id="exampleFormControlInput4">

                <label for="exampleFormControlInput3" class="form-label">
                    <h5>Confirmation mot de passe<span class="text-danger">*</span></h5>
                </label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlInput3">

                <label for="exampleFormControlInput2" class="form-label">
                    <h5>Adresse Email<span class="text-danger">*</span></h5>
                </label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
                    placeholder="name@example.com">

                <label for="floatingSelect">
                    <h5>Role<span class="text-danger">*</span></h5>
                </label>
                <select class="form-select" name="role_id" id="floatingSelect">
                    {{-- @foreach ($roles as $role)
                                                <option value="{{ $role->value }}" class="form-control">{{ $role->role_name }}</option>
                                                @endforeach --}}
                    <option selected disabled>entrer votre role</option>
                    <option value="1">Admin</option>
                    <option value="2">SimpleUser</option>
                </select>
                <button type="button" class="btn btn-lg btn-primary"style="width: 200px ;">
                    <a href="{{ url('/users/list_user') }}" style="color: black;">Annuler</a>
                </button>

                <button type="submit"
                    class="btn btn-lg"style="width: 200px ; color: black;background-color:orange">Enregistrer</button>


            </div>
        </form>
    </section>
@endsection
{{-- </body>

</html> --}}
