@extends('layouts.admin')

@section('content')
    <section class="gradient-custom">
        <div style="display:flex; justify-content:space-between;margin: 30px;">
            <h4>Details d'une question</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                    <li class="breadcrumb-item">Question</li>
                    <li class="breadcrumb-item active" aria-current="page">Details d'une question</li>
                </ol>
            </nav>

        </div>
        <div class="card bg-light" id="mybutton">
            <div class="card-header bg-secondary d-flex justify-content-between">
                <h3 style="color: whitesmoke;">Informations</h3>
                <a class="btn btn-primary" id="mybutton" href="{{ url('/questions/list_question') }}">
                    <i class="bi bi-arrow-return-left me-2"></i>Retour
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mt-3">
                                    <h3>
                                        <b>
                                            @if ($questions->video)
                                                <iframe class="video"
                                                    src="{{ asset('video/' . $questions->video) }}"></iframe>
                                            @endif
                                        </b>
                                    </h3>
                                </div>
                                <marquee behavoir="scroll" direction="left" scrollamount="18">
                                    <div class="d-flex">

                                        <h3>
                                            <b>
                                                @if ($questions->photo)
                                                    <img class="photo" src="{{ asset('image/' . $questions->photo) }}">
                                                @endif
                                            </b>
                                        </h3>
                                        <h3 class="mx-3">
                                            <b>
                                                @if ($questions->photo2)
                                                    <img class="photo" src="{{ asset('image/' . $questions->photo2) }}">
                                                @endif
                                            </b>
                                        </h3>
                                    </div>
                                </marquee>
                            </div>
                            <div class="col-md-5">
                                <div class="mt-3">
                                    <div class="card rounded-0">
                                        <div class="card-header text-white bg-warning">
                                            <h5> Nom de la question : </h5>
                                        </div>
                                        <div class="card-body">
                                            <h6>{{ $questions->questionName }}</h6>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card rounded-0">
                                        <div class="card-header text-white bg-secondary">
                                            <h5> Categorie de la question : </h5>
                                        </div>
                                        <div class="card-body">
                                            <h6>{{ $questions->name }}</h6>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card rounded-0">
                                        <div class="card-header text-white bg-warning">
                                            <h5> Description de la question : </h5>
                                        </div>
                                        <div class="card-body">
                                            <h6>{{ $questions->description }}</h6>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card rounded-0">
                                        <div class="card-header text-white bg-secondary">
                                            <h5> Solution a la question : </h5>
                                        </div>
                                        <div class="card-body">
                                            <h6>{{ $questions->answer }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
