
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
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" style="color: black;">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/users/add_user') }}" style="color: black;">Utilisateur</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter un utilisateur</li>
                    </ol>
                </nav>

            </div>
            <div class="card bg-light">
                <div class="card-header bg-secondary">
                    <h2 style="color: whitesmoke;"><i class="bi bi-plus-square me-2"></i>Ajouter un utilisateur</h2>
                </div>
                <h4>les champs marqués d'un Astérix <span class="text-danger">(*)</span> sont obligatoires</h4>
                <div class="card-body" style="display: flex; justify-content:space-around; margin-bottom:25px">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">
                            <h5>Nom<span class="text-danger">*</span></h5>
                        </label>
                        <input type="text" name="firstName" class="form-control" id="exampleFormControlInput1" style="width: 850px;">
                    </div>
                    <div>
                        <label for="exampleFormControlInput2" class="form-label">
                            <h5>Adresse Email<span class="text-danger">*</span></h5>
                        </label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
                            placeholder="name@example.com" style="width: 850px;">
                    </div>
                </div>

                <div style="display: flex; justify-content:space-around; margin-bottom:25px">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">
                            <h5>Prenom<span class="text-danger">*</span></h5>
                        </label>
                        <input type="text" name="lastName" class="form-control" id="exampleFormControlInput1" style="width: 850px;">
                    </div>
                    <div>
                        <label for="exampleFormControlInput4" class="form-label">
                            <h5>Téléphone<span class="text-danger">*</span></h5>
                        </label>
                        <input type="text" name="phoneNumber" class="form-control" id="exampleFormControlInput4" style="width: 850px;">
                    </div>
                </div>

                <div style="display: flex; justify-content:space-around; margin-bottom:25px">
                    <div>
                        <label for="floatingSelect">
                            <h5>Genre<span class="text-danger">*</span></h5>
                        </label>
                        <select class="form-select" name="gender" id="floatingSelect" style="width: 850px;">
                            <option selected disabled>entrer votre genre</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Féminin</option>
                        </select>
                    </div>
                    <div>
                        <label for="floatingSelect">
                            <h5>Role<span class="text-danger">*</span></h5>
                        </label>
                        <select class="form-select" name="role_id" id="floatingSelect" style="width: 850px;">
                            {{-- @foreach ($roles as $role)
                                                        <option value="{{ $role->value }}" class="form-control">{{ $role->role_name }}</option>
                                                        @endforeach --}}
                            <option selected disabled>entrer votre role</option>
                            <option value="1">Admin</option>
                            <option value="2">SimpleUser</option>
                        </select>
                    </div>
                </div>
                <div style="display: flex; justify-content:space-around; margin-bottom:25px;">
                    <div>
                        <label for="exampleFormControlInput3" class="form-label">
                            <h5>Mot de passe<span class="text-danger">*</span></h5>
                        </label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput3" style="width: 850px;">
                    </div>
                    <div>
                        <label for="exampleFormControlInput3" class="form-label">
                            <h5>Confirmation mot de passe<span class="text-danger">*</span></h5>
                        </label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="exampleFormControlInput3" style="width: 850px;">
                    </div>
                </div>
                <div style="display: flex; justify-content:space-around; margin-bottom:80px;">
                    <div>
                        <button type="button" class="btn btn-lg btn-danger"style="width: 200px ; margin-left:5px;">
                            <a href="{{ url('/users/list_user') }}" style="color: black;"><i class="bi bi-backspace-fill me-2"></i>Annuler</a>
                        </button>
                    </div>
                    <div>
                        <button type="submit"
                            class="btn btn-lg"style="width: 200px ; color: black;background-color:orange;margin-left:1300px;">
                            <i class="bi bi-save me-2"></i>Enregistrer
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
{{-- </body>

</html> --}}
