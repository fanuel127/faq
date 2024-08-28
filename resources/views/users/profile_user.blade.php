@extends('layouts.admin')

@section('content')
    <div style="display:flex; justify-content:space-between;margin: 30px;">
        <h5>Gestions des utilisateurs</h5>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                <li class="breadcrumb-item">Utilisateur</li>
                <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
            </ol>
        </nav>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <div class="card rounded-0 bg-white pb-3 pt-2" style="height: 71.5vh;">
                        <div class="card-hearder">
                            {{-- <form action="{{ url('/users/profile_user/{id}') }}" method="GET"> --}}
                            @if (Auth::user()->gender == 'masculin')
                                <img style="margin-left: 25%; max-width:440px; max-height:335px;" src="{{ asset('image/homme.png') }}">
                            @else
                                <img style="margin-left: 25%; max-width:440px; max-height:335px;" src="{{ asset('image/female.png') }}">
                            @endif

                            {{-- </form> --}}
                        </div>
                        <div class="card-body">
                            <div class="card text-center rounded-0 mt-5 bg-light" id="haut">
                                <div class="card-body text-center">
                                    <div class="d-flex justify-content-between">
                                        <h3>Role : </h3>
                                        <h3> {{ Auth::user()->role->role_name }} </h3>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-between">
                                        <h3>Status : </h3>
                                        <h3>
                                            @if (Auth::user()->status == 0)
                                                <span class="badge rounded-0 bg-danger">Désactivé</span>
                                            @else
                                                <span class="badge rounded-0 bg-success">Activé</span>
                                            @endif
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="card rounded-0">
                        <div class="card-header bg-secondary text-white d-flex justify-content-between">
                            <h2 class="text-center"> <i class="bi bi-info-circle-fill me-2 text-white"></i>informations
                                personnels</h2>
                            @if (Auth::user()->role->role_name == 'Admin')
                                <a href="{{ url('/users/list_user') }}" class="btn btn-primary mt-2" id="mybutton">
                                    <i class="bi bi-arrow-return-left me-2"></i>
                                    Retour
                                </a>
                            @else
                                <a href="{{ url('/questions/list_question') }}" class="btn btn-primary mt-2" id="mybutton">
                                    <i class="bi bi-arrow-return-left me-2"></i>
                                    Retour
                                </a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5><i class="bi bi-person-fill me-2 text-warning"></i>Nom : </h5>
                                <h5> {{ Auth::user()->firstName }} </h5>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <h5><i class="bi bi-person me-2 text-warning"></i>Prenom : </h5>
                                <h5> {{ Auth::user()->lastName }} </h5>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                @if (Auth::user()->gender == 'masculin')
                                    <h5><i class="bi bi-gender-male text-warning"></i> Sexe : </h5>
                                    <h5> {{ Auth::user()->gender }}</h5>
                                @elseif (Auth::user()->gender == 'feminin')
                                    <h5><i class="bi bi-gender-female text-warning"></i> Sexe : </h5>
                                    <h5> {{ Auth::user()->gender }}</h5>
                                @endif
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <h5><i class="bi bi-telephone-fill me-2 text-warning"></i>Telephone : </h5>
                                <h5> {{ Auth::user()->phoneNumber }} </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <form action="{{ route('update.password') }}" method="POST">
                        @csrf
                        @if (session('success'))
                            <div class="mb-3">
                                <h3><i class="bi bi-check-circle-fill me-2 text-success"></i>{{ session('success') }}</h3>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div>
                                @foreach ($errors->all() as $error)
                                    <h3><i class="bi bi-x-circle-fill me-2 text-danger"></i>{{ $error }}</h3>
                                @endforeach

                            </div>
                        @endif
                        <div class="card rounded-0">
                            <div class="card-header bg-secondary text-white">
                                <h3> <i class="bi bi-key me-2 text-white"></i>Modifier mot de passe</h3>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <label for="old_password">
                                        <h5>Ancien mot de passe</h5>
                                    </label>
                                    <input class="form-control rounded-0" id="password" type="password" name="old_password"
                                        required>
                                </div>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <label for="new_password">
                                        <h5>Nouveau mot de passe</h5>
                                    </label>
                                    <input class="form-control rounded-0" id="password" type="password" name="new_password"
                                        required>
                                </div>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <label for="confirm_new_password">
                                        <h5>Confirmation mot de passe</h5>
                                    </label>
                                    <input class="form-control rounded-0" id="password" type="password"
                                        name="confirm_new_password" required>
                                </div>
                                <button type="submit" class="btn btn-warning text-white rounded-0 mt-3"
                                    style="font-size: 20px;">
                                    <i class="bi bi-pencil-fill me-2 button "></i>Modifier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>

@endsection

{{-- <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/datatables.min.js') }}"></script>
    <script src={{ asset('admin/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}></script>
    <script src="{{ asset('admin/jquery-3.7.1.js') }}"></script>

</body>
</html> --}}
