
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
            <div class="card-body bg-light">
                <div style="display:flex; justify-content:space-between;margin: 30px;background-color:#fff;">
                    <h4>Gestions des utilisateurs</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Accueil</li>
                            <li class="breadcrumb-item">Utilisateurs</li>
                            <li class="breadcrumb-item active" aria-current="page">Ajouter un utilisateur</li>
                        </ol>
                    </nav>

                </div>
                <div class="row" style="margin: 10px;">
                    <div class="col-12">
                        <div class="card card-sm">
                            <div class="card-header bg-warning">
                                <h2 style="text-align:center;">Ajouter un utilisateur</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content:space-around; margin-top:3%;">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">
                            <h3>Nom<span class="text-danger">*</span></h3>
                        </label>
                        <input type="text" name="firstName" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div>
                        <label for="floatingSelect">
                            <h3>Genre<span class="text-danger">*</span></h3>
                        </label>
                        <select class="form-select" name="gender" id="floatingSelect">
                            <option selected disabled>entrer votre genre</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Féminin</option>
                        </select>
                    </div>
                    <div>
                        <label for="exampleFormControlInput2" class="form-label">
                            <h3>Adresse Email<span class="text-danger">*</span></h3>
                        </label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
                            placeholder="name@example.com">
                    </div>
                    <div>
                        <label for="exampleFormControlInput3" class="form-label">
                            <h3>Mot de passe<span class="text-danger">*</span></h3>
                        </label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput3">
                    </div>

                </div>

                <div style="display: flex; justify-content:space-around; margin-top:2%;">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">
                            <h3>Prenom<span class="text-danger">*</span></h3>
                        </label>
                        <input type="text" name="lastName" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div>
                        <label for="floatingSelect">
                            <h3>Role<span class="text-danger">*</span></h3>
                        </label>
                        <select class="form-select" name="role_id" id="floatingSelect">
                            {{-- @foreach ($roles as $role)
                                                        <option value="{{ $role->value }}" class="form-control">{{ $role->role_name }}</option>
                                                        @endforeach --}}
                            <option selected disabled>entrer votre role</option>
                            <option value="1">Admin</option>
                            <option value="2">SimpleUser</option>
                        </select>
                    </div>
                    <div>
                        <label for="exampleFormControlInput4" class="form-label">
                            <h3>Téléphone<span class="text-danger">*</span></h3>
                        </label>
                        <input type="text" name="phoneNumber" class="form-control" id="exampleFormControlInput4">
                    </div>

                    <div>
                        <label for="exampleFormControlInput3" class="form-label">
                            <h3>Confirmation mot de passe<span class="text-danger">*</span></h3>
                        </label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="exampleFormControlInput3">
                    </div>
                </div>

                <div style="display: flex; justify-content:space-evenly; margin-top:2%;">
                    <div>
                        <button type="button" class="btn btn-lg btn-primary"style="width: 200px ;">
                            <a href="{{ url('/users/list_user') }}" style="color: black;">Annuler</a>
                        </button>
                    </div>

                    <div>
                        <button type="submit"
                            class="btn btn-lg"style="width: 200px ; color: black;background-color:orange">
                            Enregistrer
                        </button>
                    </div>
                </div>


            </div>
        </form>
    </section>
@endsection
{{-- </body>

</html> --}}
