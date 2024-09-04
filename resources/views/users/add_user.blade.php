@extends('layouts.admin')

@section('content')

    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        <h4><i class="bi bi-x-circle-fill me-2 text-danger"></i>{{ $error }}</h4>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast',
                },
                showConfirmButton: false,
                timer: 1400,
                timerProgressBar: true,
            })
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}",
            });
            // Swal.fire({
            //     icon: "success",
            //     title: "Wow...",
            //     text: "{{ session('success') }}",
            //     timer: 2300
            // });
        </script>
        {{-- <div class="alert alert-success">
            <i class="bi bi-check-circle-fill me-2 text-success"></i>{{ session('success') }}
        </div> --}}
    @endif
    <section class="gradient-custom">
        <div class="d-flex justify-content-between">
            <h4>Gestions des utilisateurs</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                    <li class="breadcrumb-item">Utilisateur</li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter un utilisateur</li>
                </ol>
            </nav>
        </div>
        <form action="{{ route('users.store') }}" method="post" class="py-4">
            {!! csrf_field() !!}
            @method('post')
            <div class="card bg-light" id="mybutton">
                <div class="card-header bg-secondary text-white d-flex justify-content-between">
                    <h3><i class="bi bi-plus-square me-2"></i>Ajouter
                        un utilisateur</h3>
                    <a href="{{ url('/users/list_user') }}" class="btn btn-primary mt-2" id="mybutton">
                        <i class="bi bi-arrow-return-left me-2"></i>
                        Retour
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h4 class="mt-3">les champs marqués d'un Astérix <span class="text-danger">(*)</span> sont
                            obligatoires</h4>
                        <div class="col-md-6 mt-3">
                            <div>
                                <label for="myinput" class="form-label">
                                    <h5>Nom<span class="text-danger">*</span></h5>
                                </label>
                                <input type="text" name="firstName" class="form-control" id="myinput">
                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label for="myinput" class="form-label">
                                    <h5>Prenom<span class="text-danger">*</span></h5>
                                </label>
                                <input type="text" name="lastName" class="form-control" id="myinput">
                            </div>
                            <div class="mt-2">
                                <label for="myinput">
                                    <h5>Genre<span class="text-danger">*</span></h5>
                                </label>
                                <select class="form-select" name="gender" id="myinput">
                                    <option selected disabled>selectionner votre genre</option>
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Féminin</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label for="myinput" class="form-label">
                                    <h5>Mot de passe<span class="text-danger">*</span></h5>
                                </label>
                                <input type="password" name="password" class="form-control" id="myinput">
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div>
                                <label for="myinput" class="form-label">
                                    <h5>Adresse Email<span class="text-danger">*</span></h5>
                                </label>
                                <input type="email" name="email" class="form-control" id="myinput"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mt-2">
                                <label for="myinput" class="form-label">
                                    <h5>Téléphone<span class="text-danger">*</span></h5>
                                </label>
                                <input type="number" name="phoneNumber" class="form-control" id="myinput">
                            </div>
                            <div class="mt-2">
                                <label for="myinput">
                                    <h5>Role<span class="text-danger">*</span></h5>
                                </label>
                                <select class="form-select" name="role_id" id="myinput">
                                    <option selected disabled>selectionner votre role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" class="form-control">{{ $role->role_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2">
                                <label for="myinput" class="form-label">
                                    <h5>Confirmation mot de passe<span class="text-danger">*</span></h5>
                                </label>
                                <input type="password" name="password_confirmation" class="form-control" id="myinput">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-between mt-3 mb-5">
                            <button type="reset" class="btn btn-danger" id="mybutton">
                                <i class="bi bi-backspace-fill me-2"></i>Annuler
                            </button>
                            <button type="submit" class="btn btn-warning" id="mybutton">
                                <i class="bi bi-save me-2"></i>Enregistrer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
{{-- </body>

</html> --}}
