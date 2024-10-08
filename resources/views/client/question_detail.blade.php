<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>question_detail_client</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('admin/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/') }}">
    <script src="{{ asset('admin/bootstrap-5.3.3-dist/js/bootstrap.min.js') }}"></script>

    <style>
        #card {
            height: 250px;
        }

        a {
            margin-left: 95%;
        }

        .gauche {
            margin-left: 150px;
        }
    </style>

</head>

<body class="bg-light">

    <div class="container-fluid py-3">
        <div>
            <a href="{{ url('/client/question_list') }}" class="btn btn-info btn-sm rounded-0 text-white me-2">
                <i class="bi bi-arrow-return-left me-2"></i>Retour
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ms-4 mt-3">
                            @if ($questions->video)
                                <iframe class="video" src="{{ asset('video/' . $questions->video) }}" frameborder="0"
                                    height="450" width="1000"></iframe>
                            @endif
                        </div>
                        {{-- <marquee behavoir="scroll" direction="left" scrollamount="18">
                            <div class="d-flex">
                                <img src="{{ asset('image/img2.jpg') }}" alt="img" height="400" width="489"
                                    class="card-amg-top ms-4 mt-2">
                                <img src="{{ asset('image/img2.jpg') }}" alt="img" height="400" width="489"
                                    class="card-amg-top ms-4 mt-2">
                            </div>
                        </marquee> --}}
                        <div class="d-flex">
                            @if ($questions->photo)
                            <img src="{{ asset('image/' . $questions->photo) }}" alt="img" height="400" width="489"
                                class="card-amg-top ms-4 mt-2">
                            @endif
                            @if ($questions->photo2)
                            <img src="{{ asset('image/' . $questions->photo2) }}" alt="img" height="400" width="489"
                                class="card-amg-top ms-4 mt-2">
                            @endif

                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="mt-3 me-4">
                            <div class="card rounded-0" id="card">
                                <div class="card-header text-white bg-warning">
                                    <h5> Nom de la question</h5>
                                </div>
                                <div class="card-body">
                                    <p class="description">
                                        {{ $questions->questionName }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="mt-3 me-4">
                            <div class="card rounded-0" id="card">
                                <div class="card-header text-white bg-secondary">
                                    <h5> Description</h5>
                                </div>
                                <div class="card-body">
                                    <p class="description">
                                        {{ $questions->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="mt-3 me-4">
                            <div class="card rounded-0" id="card">
                                <div class="card-header text-white bg-warning">
                                    <h5> Reponse</h5>
                                </div>
                                <div class="card-body">
                                    <p class="description">
                                        {{ $questions->answer }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
