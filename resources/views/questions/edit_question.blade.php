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
        <form action="{{ route('questions.update', $questions->id) }}" method="POST" enctype="multipart/form-data">
            {{-- {!! csrf_field() !!} --}}
            @csrf
            @method('PUT')
            <div style="display:flex; justify-content:space-between;margin: 30px;">
                <h4>Gestions des questions</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"
                                style="color: black;text-decoration:0;">Accueil</a></li>
                        <li class="breadcrumb-item">Questions</li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier une question</li>
                    </ol>
                </nav>
            </div>
            <div class="card bg-light rounded-0">
                <div class="card-header bg-secondary d-flex justify-content-between">
                    <h3 style="color: whitesmoke;"><i class="bi bi-plus-square me-2"></i>Modifier une question</h3>
                    <div>
                        <a href="{{ url('/questions/list_question') }}" class="btn btn-primary mt-2" id="mybutton">
                            <i class="bi bi-arrow-return-left me-2"></i>
                            Retour
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-3">
                                <label for="largequestion" class="form-label">
                                    <h4>Nom de la question</h4>
                                </label>
                                <input class="form-control rounded-0" id="largequestion" name="questionName"
                                    value="{{ $questions->questionName }}">
                            </div>

                            <div class="mt-3">
                                <label for="largequestion form-group mb-3" class="form-label">
                                    <h4>Categorie de la question<span class="text-danger">*</span></h4>
                                </label>
                                <select class="form-select rounded-0" name="category_id" id="largequestion">
                                    <option selected disabled>selectionner votre genre</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-3">
                                <label for="largequestion form-group" class="form-label">
                                    <h4>Description de la question</h4>
                                </label>
                                <textarea class="form-control rounded-0" id="largequestion" name="description">{{ $questions->description }}</textarea>
                            </div>

                            <div class="mt-3">
                                <label for="largequestion" class="form-label">
                                    <h4>Solution à la question</h4>
                                </label>
                                <input class="form-control rounded-0" id="largequestion" name="answer"
                                    value="{{ $questions->answer }}">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="mt-3">
                            <button type="reset" class="btn btn-lg btn-danger rounded-0">
                                <i class="bi bi-backspace-fill me-2"></i>Annuler
                            </button>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-lg btn-warning rounded-0">
                                <i class="bi bi-save me-2"></i>Enregistrer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
