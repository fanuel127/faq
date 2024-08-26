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
        <div class="d-flex justify-content-between">
            <h4>Modifier un utilisateur</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                    <li class="breadcrumb-item">Utilisateur</li>
                    <li class="breadcrumb-item active" aria-current="page">Modifier un utilisateur</li>
                </ol>
            </nav>
        </div>
        <form action="{{ route('users.update', $users->id) }}" method="POST" enctype="multipart/form-data" class="py-4">
            @csrf
            @method('PUT')
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div>
                                        <label for="myinput" class="form-label">
                                            <h4>Nom</h4>
                                        </label>
                                        <input type="text" name="firstName" class="form-control" id="myinput"
                                            value="{{ $users->firstName }}">
                                    </div>
                                    <div class="mt-3">
                                        <label for="myinput">
                                            <h4>Genre</h4>
                                        </label>
                                        <select class="form-select" name="gender" id="myinput"
                                            value="{{ $users->gender }}">
                                            <option selected disabled>selectionner votre genre</option>
                                            <option value="masculin">Masculin</option>
                                            <option value="feminin">Féminin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div>
                                        <label for="myinput" class="form-label">
                                            <h4>Prenom</h4>
                                        </label>
                                        <input type="text" name="lastName" class="form-control" id="myinput"
                                            value="{{ $users->lastName }}">
                                    </div>
                                    <div class="mt-3">
                                        <label for="myinput">
                                            <h4>Role</h4>
                                        </label>
                                        <select class="form-select" name="role_id" id="myinput">
                                            <option value="" selected disabled>Selectionner</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" class="form-control">
                                                    {{ $role->role_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-4">
                                    <label for="myinput" class="form-label">
                                        <h4>Téléphone</h4>
                                    </label>
                                    <input type="number" name="phoneNumber" class="form-control" id="myinput"
                                        value="{{ $users->phoneNumber }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-4 justify-content-between d-flex mb-3">
                                    <button type="reset" class="btn btn-danger button rounded-0">
                                        <i class="bi bi-backspace-fill me-2"></i>Annuler
                                    </button>

                                    <button type="submit" id="mybutton" class="btn btn-warning button">
                                        <i class="bi bi-pencil-fill me-2 button "></i>modifier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
{{-- </body>

</html> --}}
