@extends('layouts.admin')

@section('content')
    <section class="gradient-custom">
        <div style="display:flex; justify-content:space-between;margin: 30px;">
            <h4>Details d'une question</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/questions/show_question') }}" id="lien">Question</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Details d'une question</li>
                </ol>
            </nav>

        </div>
        <div class="card bg-light" id="mybutton">
            <div class="card-header bg-secondary d-flex justify-content-between">
                <h2 style="color: whitesmoke;">Informations</h2>
                <a class="btn btn-warning" id="mybutton" href="{{ url('/questions/list_question') }}">
                    <i class="bi bi-arrow-return-left me-2"></i>Retour
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h3> Id : <b> {{ $questions->id }}</b> </h3>
                        <br>
                        <hr>
                        <h3> Nom de la question : <b> {{ $questions->questionName }}</b> </h3>
                        <br>
                        <hr>
                        <h3> Categorie de la question : <b> {{ $questions->name }}</b> </h3>
                        <br>
                        <hr>
                        <h3> Description de la question : <b> {{ $questions->description }}</b> </h3>
                        <br>
                        <hr>
                        <h3> Solution a la question : <b>{{ $questions->answer }}</b> </h3>
                        <br>
                        <hr>
                        <h3>
                            image en rapport avec la question :
                            <b>
                                @if ($questions->photo)
                                    <img src="{{ asset('image/' . $questions->photo) }}">
                                @endif
                            </b>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
