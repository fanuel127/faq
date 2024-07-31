<!DOCTYPE html>
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

<body>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>

            @endforeach
        </ul>

        @endif
    </div>
    <section class="vh-100 gradient-custom">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-5 col-lg-12 col-xl-8">
                    <div class="card bg-secondary text-white" style="border-radius: 1rem;">
                        <form action="{{ url('/users/edit_user/'.$users->id ) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-body px-4">

                                <div class="mb-md-5 mt-md-4 pb-2">

                                    <h2 class="fw-bold mb-4 text-uppercase" style="border-radius: 25%; color: orange">
                                        <p> <u>Modifier un Utilisateur</u> </p>
                                    </h2>
                                    @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif
                                    <input type="hidden" name="id" value="{{ $users->id }}">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <label for="exampleFormControlInput1" class="form-label">
                                                    <h5>Nom</h5>
                                                </label>
                                                <input type="text" name="firstName" class="form-control"
                                                    id="exampleFormControlInput1" value="{{ $users->firstName }}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <label for="exampleFormControlInput1" class="form-label">
                                                    <h5>Prenom</h5>
                                                </label>
                                                <input type="text" name="lastName" class="form-control"
                                                    id="exampleFormControlInput1" value="{{ $users->lastName }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput4" class="form-label">
                                                        <h5>Téléphone</h5>
                                                    </label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        id="exampleFormControlInput4" value="{{ $users->phoneNumber }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <div>
                                                    <label for="floatingSelect">
                                                        <h5>Role</h5>
                                                    </label>
                                                    <select class="form-select" name="role_id" id="floatingSelect" value="{{ $users->role_id }}">
                                                        {{-- @foreach ($roles as $role)
                                                        <option value="{{ $role->value }}" class="form-control">{{ $role->role_name }}</option>
                                                        @endforeach --}}
                                                        <option selected disabled>entrer votre role</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">SimpleUser</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <label for="floatingSelect">
                                                    <h5>Genre</h5>
                                                </label>
                                                <select class="form-select" name="gender" id="floatingSelect" value="{{ $users->gender }}">
                                                    <option selected disabled>entrer votre genre</option>
                                                    <option value="masculin">Masculin</option>
                                                    <option value="feminin">Féminin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <button type="button" class="btn btn-lg btn-primary"
                                                   style="width: 400px ;" ><a href="{{ url('/users/list_user') }}" style="color: black;">Back</a></button>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <button type="submit" value="modifier" class="btn btn-lg"
                                                    style="width: 400px ; color: black;background-color:orange">modifier</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
