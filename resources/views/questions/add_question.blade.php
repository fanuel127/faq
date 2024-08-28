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
    <section class="gradient-custom">
        <form action="{{ route('questions.store') }}" method="post">
            {!! csrf_field() !!}
            @method('post')
            <div class=" d-flex justify-content-between">
                <h4>Gestions des questions</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" style="color: black;">Accueil</a></li>
                        <li class="breadcrumb-item">Questions</li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter une question</li>
                    </ol>
                </nav>

            </div>
            <div class="card bg-light rounded-0">
                <div class="card-header bg-secondary text-white d-flex justify-content-between">
                    <h4><i class="bi bi-plus-square me-2"></i>Ajouter une question</h4>
                    <a href="{{ url('/questions/list_question') }}" class="btn btn-lg btn-primary rounded-0 text-white"><i
                            class="bi bi-arrow-return-left me-2"></i>Retour</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h4 class="mt-3 ">les champs marqués d'un Astérix <span class="text-danger">(*)</span> sont
                            obligatoires
                        </h4>
                        <div class="col-md-6 mt-3">
                            <div>
                                <label for="exampleFormControlTextarea1" class="form-label">
                                    <h4>Nom de la question<span class="text-danger">*</span></h4>
                                </label>
                                <input class="form-control form-control-lg rounded-0" name="questionName" id="exampleFormControlTextarea1">
                            </div>
                            <br>
                            <div>
                                <label for="formFile" class="form-label">
                                    <h4>Image de la question<span class="text-danger">*</span></h4>
                                </label>
                                <input class="form-control form-control-lg rounded-0" name="photo" type="file" id="formFile">
                            </div>
                            <br>
                            <div>
                                <label for="formFileMultiple" class="form-label">
                                    <h4>Video de la question</h4>
                                </label>
                                <input class="form-control form-control-lg rounded-0" name="video" type="file" id="formFileMultiple"
                                    multiple>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div>
                                <label for="exampleFormControlTextarea3 form-group col-md-6 mb-3" class="form-label">
                                    <h4>Categorie de la question<span class="text-danger">*</span></h4>
                                </label>
                                <select class="form-select form-select-lg rounded-0" name="category_id" id="category">
                                    <option value="" selected disabled>selectionner votre categorie</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="formFile" class="form-label">
                                    <h4>Image de la question<span class="text-danger">*</span></h4>
                                </label>
                                <input class="form-control form-control-lg rounded-0" name="photo2" type="file" id="formFile">
                            </div>
                            <br>
                            <div>
                                <label for="exampleFormControlTextarea1" class="form-label">
                                    <h4>Solution à la question<span class="text-danger">*</span></h4>
                                </label>
                                <input class="form-control form-control-lg rounded-0" name="answer" id="exampleFormControlTextarea1">
                            </div>

                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="exampleFormControlTextarea2 form-group col-md-6 mb-3" class="form-label">
                            <h4>Description de la question<span class="text-danger">*</span></h4>
                        </label>
                        <textarea class="form-control form-control-lg rounded-0" name="description" id="exampleFormControlTextarea2"></textarea>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="reset" class="btn btn-danger btn-lg" id="mybutton">
                            <i class="bi bi-backspace-fill me-2"></i>Annuler
                        </button>
                        <div>
                            <button type="submit" class="btn btn-lg btn-warning rounded-0 text-white">
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
