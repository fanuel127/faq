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
        <form action="{{ route('questions.store') }}" method="post">
            {!! csrf_field() !!}
            @method('post')
            <div style="display:flex; justify-content:space-between;margin: 30px;">
                <h4>Gestions des questions</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" style="color: black;">Accueil</a></li>
                        <li class="breadcrumb-item">Questions</li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter une question</li>
                    </ol>
                </nav>

            </div>
            <div class="card bg-light">
                <div class="card-header bg-warning">
                    <h2>Ajouter une question</h2>
                </div>
                <div class="card-body" style="display: flex; justify-content:space-around; margin-top:3%;">
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">
                            <h4>Nom de la question<span class="text-danger">*</span></h4>
                        </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 800px;"></textarea>
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea2 form-group col-md-6 mb-3"
                            class="form-label">
                            <h4>Description de la question<span class="text-danger">*</span></h4>
                        </label>
                        <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" style="width: 800px;"></textarea>
                    </div>
                </div>

                <div style="display: flex; justify-content:space-around; margin-top:2%;">
                    <div>
                        <label for="formFile" class="form-label">
                            <h4>Image de la question<span class="text-danger">*</span></h4>
                        </label>
                        <input class="form-control" type="file" id="formFile" style="width: 800px;">
                    </div>
                    <div>
                        <label for="formFileMultiple" class="form-label">
                            <h4>Video de la question</h4>
                        </label>
                        <input class="form-control" type="file" id="formFileMultiple" style="width: 800px;" multiple>
                    </div>
                </div>

                <div style="display: flex; justify-content:space-around; margin-top:2%; margin-bottom:80px;">
                    <div>
                        <label for="exampleFormControlTextarea3 form-group col-md-6 mb-3"
                            class="form-label">
                            <h4>Categorie de la question<span class="text-danger">*</span></h4>
                        </label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3" style="width: 800px;"></textarea>
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">
                            <h4>Solution à la question<span class="text-danger">*</span></h4>
                        </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 800px;"></textarea>
                    </div>
                </div>

                <div style="display: flex; justify-content:space-around; margin-top:25px; margin-bottom:80px;">
                    <div>
                        <button type="submit"
                            class="btn btn-lg"style="width: 800px ; color: black;background-color:orange;margin-left:10px;">
                            Enregistrer
                        </button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-lg btn-primary"style="width: 800px ;margin-left:25px;">
                            <a href="{{ url('/questions/list_question') }}" style="color: black;">Annuler</a>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
{{-- </body>

</html> --}}

