
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
            <div style="display:flex; justify-content:space-between;margin: 30px;">
                <h4>Gestions des utilisateurs</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/users/add_user') }}" id="lien">Utilisateur</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter un utilisateur</li>
                    </ol>
                </nav>

            </div>
            <div class="card bg-light" id="mybutton">
                <div class="d-flex justify-content-between  bg-secondary" style="margin-bottom:25px">
                    <div class="card-header">
                        <h2 style="color: whitesmoke;"><i class="bi bi-plus-square me-2" style="color: orange;" ></i>Ajouter un utilisateur</h2>
                    </div>
                    <div style="margin-right: 50px;">
                        <a href="{{ url('/users/list_user') }}" class="btn btn-primary mt-3" id="mybutton">
                            <i class="bi bi-arrow-return-left me-2"></i>
                            Retour
                        </a>
                    </div>
                </div>
                <h4 class="mt-3 ms-3">les champs marqués d'un Astérix <span class="text-danger">(*)</span> sont obligatoires</h4>
                <div class="d-flex justify-content-around mb-4 mt-4">
                    <div>
                        <label for="myinput" class="form-label">
                            <h5>Nom<span class="text-danger">*</span></h5>
                        </label>
                        <input type="text" name="firstName" class="form-control" id="myinput" style="width: 850px;">
                    </div>
                    <div>
                        <label for="myinput" class="form-label">
                            <h5>Adresse Email<span class="text-danger">*</span></h5>
                        </label>
                        <input type="email" name="email" class="form-control" id="myinput"
                            placeholder="name@example.com" style="width: 850px;">
                    </div>
                </div>

                <div class="d-flex justify-content-around mb-4">
                    <div>
                        <label for="myinput" class="form-label">
                            <h5>Prenom<span class="text-danger">*</span></h5>
                        </label>
                        <input type="text" name="lastName" class="form-control" id="myinput" style="width: 850px;">
                    </div>
                    <div>
                        <label for="myinput" class="form-label">
                            <h5>Téléphone<span class="text-danger">*</span></h5>
                        </label>
                        <input type="number" name="phoneNumber" class="form-control" id="myinput" style="width: 850px;">
                    </div>
                </div>

                <div class="d-flex justify-content-around mb-4">
                    <div>
                        <label for="myinput">
                            <h5>Genre<span class="text-danger">*</span></h5>
                        </label>
                        <select class="form-select" name="gender" id="myinput" style="width: 850px;">
                            <option selected disabled>selectionner votre genre</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Féminin</option>
                        </select>
                    </div>
                    <div>
                        <label for="myinput">
                            <h5>Role<span class="text-danger">*</span></h5>
                        </label>
                        <select class="form-select" name="role_id" id="myinput" style="width: 850px;">
                            {{-- @foreach ($roles as $role)
                                                        <option value="{{ $role->value }}" class="form-control">{{ $role->role_name }}</option>
                                                        @endforeach --}}
                            <option selected disabled>selectionner votre role</option>
                            <option value="1">Admin</option>
                            <option value="2">Gestionnaire</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-around mb-4">
                    <div>
                        <label for="myinput" class="form-label">
                            <h5>Mot de passe<span class="text-danger">*</span></h5>
                        </label>
                        <input type="password" name="password" class="form-control" id="myinput" style="width: 850px;">
                    </div>
                    <div>
                        <label for="myinput" class="form-label">
                            <h5>Confirmation mot de passe<span class="text-danger">*</span></h5>
                        </label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="myinput" style="width: 850px;">
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-5">
                        <button type="reset" class="btn btn-danger ms-3" id="mybutton">
                            <i class="bi bi-backspace-fill me-2"></i>Annuler
                        </button>
                        <button type="submit" class="btn btn-warning me-3" id="mybutton">
                            <i class="bi bi-save me-2"></i>Enregistrer
                        </button>
                </div>
            </div>
        </form>
    </section>
@endsection
{{-- </body>

</html> --}}
