@extends('layouts.admin')

@section('content')
    <section class="gradient-custom">
        <div style="display:flex; justify-content:space-between;margin: 30px;">
            <h4>Details d'un utilisateur</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/users/show_user') }}" id="lien">Utilisateur</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Details d'un utilisateur</li>
                </ol>
            </nav>

        </div>
        <div class="card bg-light" id="mybutton">
            <div class="card-header bg-secondary d-flex justify-content-between">
                <h2 style="color: whitesmoke;">Informations de l'utilisateur : {{ $users->lastName }} </h2>
                <a class="btn btn-warning" id="mybutton" href="{{ url('/users/list_user') }}">
                    <i class="bi bi-arrow-return-left me-2"></i>Retour
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3" style="width: 300px;">
                        <img src="{{ asset('image/' . $image) }}">
                    </div>
                    <div class="col-3">
                        <div class="vertical-line" style="margin-left: 400px;"></div>
                    </div>
                    <div class="col-6">
                        <h3> Id : <b> {{ $users->id }}</b> </h3>
                        <br>
                        <hr>
                        <h3> <b> {{ $users->firstName }}</b> <b> {{ $users->lastName }}</b> </h3>
                        <br>
                        <hr>
                        <h3> Genre : <b> {{ $users->gender }}</b> </h3>
                        <br>
                        <hr>
                        <h3> <i class="bi bi-envelope-fill"></i> : <b> {{ $users->email }}</b> </h3>
                        <br>
                        <hr>
                        <h3> <i class="bi bi-telephone-fill"></i> : <b> {{ $users->phoneNumber }}</b> </h3>
                        <br>
                        <hr>
                        <h3> Role : <b> {{ $users->role_id === 1 ? 'Admin' : 'Gestionnaire' }}</b> </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

