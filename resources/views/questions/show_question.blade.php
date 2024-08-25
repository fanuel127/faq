<<<<<<< HEAD
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
                                                <iframe class="video" src="{{ asset('video/' . $questions->video) }}"></iframe>
                                            @endif
                                        </b>
                                    </h3>
                                </div>
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
=======
{{-- <div class="row">
    <div class="col-md-6">
        <div class="form-group">

            <label for="firstname" class="form-label mt-2">
                First Name
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="text" name="firstname" class="form-control form-control-sm"
                id="firstname">

        </div>
        <div class="form-group">
            <label for="email" class="form-label mt-2">
                Email
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="email" name="email" class="form-control form-control-sm "
                id="email">
        </div>
        <div class="form-group">

            <label for="password" class="form-label mt-2">
                Password
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="password" name="password" class="form-control form-control-sm"
                id="password">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <label for="lastname" class="form-label mt-2">
                Last Name
            </label>
            <input type="text" name="lastname" class="form-control form-control-sm"
                id="lastname">
        </div>
        <div class="form-group">

            <label for="PhoneNumber" class="form-label mt-2">
                Phone Number
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="number" name="PhoneNumber"
                class="form-control form-control-sm" id="PhoneNumber">
        </div>
        <div class="form-group">

            <label for="Confirmation" class="form-label mt-2">
                Password Confirmation
                <span class="text-danger">
                    *
                </span>
            </label>
            <input type="password" name="Confirmation"
                class="form-control  form-control-sm" id="Confirmation">
        </div>
    </div>
    <div class="form-group">
        <label for="gender" class="form-label mt-2">
            Gender
        </label>
        <select class="form-select form-select-sm" name="gender" id="gender">
            <option selected disabled>Select your gender</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select>
    </div>
    <div class="btn mt-3 d-flex justify-content-between">
        <button type="reset" class="btn btn-danger btn-sm " id="btn">
            <i class="bi bi-backspace-fill me-2"></i>Cancel
        </button>
        <button type="submit" class="btn btn-primary btn-sm" id="btn">
            <i class="bi bi-save me-2"></i>Submit
        </button>
    </div>
</div> --}}
<div class="col-md-6">
    <div class="question-detail">
        <h4 class="question-title"> Question Title</h4>
        <p class="question-description">This is an example of a detailed description that
            explains
            the
            context and
            content of the question in full.</p>
        <p class="question-category"><strong>Category:</strong> server problem
        </p>
        <div class="question-answer">
            <h5>Answer</h5>
            <p>This area provides a comprehensive answer to the question posed, detailing all
                relevant
                information.
            </p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="media-gallery">
            <h5>Photo</h5>


            <h5>Video</h5>
            <div class="videos">
                <iframe src="{{ asset('video/video1.mp4') }}" frameborder="0"
                    allowfullscreen></iframe>
            </div>

        </div>
    </div>

>>>>>>> belinda
