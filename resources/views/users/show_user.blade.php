@extends('layouts.admin')

@section('content')
    <section class="gradient-custom">
        <div class="d-flex justify-content-between mb-4">
            <h4>Details d'un utilisateur</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                    <li class="breadcrumb-item">Utilisateur</li>
                    <li class="breadcrumb-item active" aria-current="page">Details d'un utilisateur</li>
                </ol>
            </nav>

        </div>
        <div class="card bg-light" id="mybutton">
            <div class="card-header bg-secondary">
                <h3 class="text-white">Informations de l'utilisateur : {{ $users->firstName }} {{ $users->lastName }}
                </h3>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-md-6 text-center shadow">
                        <img src="{{ asset('image/' . $image) }}" height="350" width="400">
                        <h3> {{ $users->gender }}</h3>
                    </div>
                    <div class="col-md-6">
                        <button class="shadow bg-white border-0">
                            <h1> {{ $users->firstName }} {{ $users->lastName }}</h1>
                        </button>
                        <hr>
                        <div class="d-flex justify-content-between">
                            @if ($users->gender == 'masculin')
                                <h5><i class="bi bi-gender-male text-warning"></i> Sexe : </h5> <h3> {{ $users->gender }}</h3>
                            @elseif ($users->gender == 'feminin')
                                <h5><i class="bi bi-gender-female text-warning"></i> Sexe : </h5> <h3> {{ $users->gender }}</h3>
                            @endif
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5> <i class="bi bi-envelope-fill text-warning me-2"></i> Email : </h5>
                            <h3> {{ $users->email }}</h3>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5> <i class="bi bi-telephone-fill text-warning me-2"></i> Telephone : </h5>
                            <h3> +237 {{ $users->phoneNumber }}</h3>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            @if ($users->role_name == 'Admin')
                                <h5><i class="bi bi-shield-lock-fill text-warning me-2"></i>Role : </h5> <h3> {{ $users->role_name }}</h3>
                            @elseif ($users->role_name == 'Gestionnaire')
                                <h5><i class="bi bi-person-fill text-warning me-2"></i>Role : </h5> <h3> {{ $users->role_name }}</h3>
                            @endif
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h3>
                                @if ($users->status == 0)
                                    <span class="badge rounded-0 bg-danger">Désactivé</span>
                                @else
                                    <span class="badge rounded-0 bg-success">Activé</span>
                                @endif
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light d-flex justify-content-between">
                <a href="{{ url('/users/list_user') }}" id="mybutton" title="Fermer"
                    class="btn btn-primary btn-lg mt-3 mb-3">
                    <i class="bi bi-arrow-return-left me-2"></i>Retour
                </a>
                <div>
                    @if ($users->status == 1)
                        <a href="{{ route('status', $users->id) }}" class="btn btn-danger btn-lg mt-3 mb-3" id="span">
                            <i class="bi bi-ban text-white"></i> Désactivé</a>
                    @else
                        <a href="{{ route('status', $users->id) }}" class="btn btn-success btn-lg mt-3 mb-3"
                            id="span"> <i class="bi bi-check-square-fill"></i> Activé</a>
                    @endif
                    <a href="{{ url('/users/update/' . $users->id) }}" id="mybutton" title="Modifier"
                        class="btn btn-warning mx-2 btn-lg mt-3 mb-3">
                        <i class="fas fa-edit btn-lg text-white me-2 "></i>Modifier
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
