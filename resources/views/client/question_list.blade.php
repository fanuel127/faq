<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>question_list_client</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('admin/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/') }}">
    <script src="{{ asset('admin/bootstrap-5.3.3-dist/js/bootstrap.min.js') }}"></script>

    <style>
        .card {
            transition: 0.5s;
            box-shadow: 8px 8px 8px rgba(68, 65, 65, 0.285);
            width: 417px;
            height: 320px;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .card-body .description {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: horizontal;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

</head>

<body class="bg-light">
    <div class="container-fluid py-2">
        <div class="filter-bar fixed d-flex justify-content-between bg-light rounded-0 border-0 pt-4 pb-4">
            <h3 class="ms-3 me-4">Accueil</h3>
            <div class="input-group ms-4">
                <form class="search-form d-flex w-100" action="/client/question_list/search" method="GET">
                    <div class="input-group">
                        <input class="search-input form-control filtered border-0 rounded-0" type="search"
                            id="myinpu" name="search" placeholder="Recherche..." aria-label="Search"
                            value="{{ isset($search) ? $search : '' }}">
                        <button type="submit" class="btn btn-warning rounded-0 me-3" id="myinpu"
                            style="width: 10vh;"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="content mt-4">
            <div class="col-md-12 col-sm-3">
                <div class="card-list mt-4 d-flex flex-wrap justify-content-between">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($questions as $question)
                        @if ($i % 4 == 0)
                            <div class="row mb-3 w-100">
                        @endif
                        <div class="col-md-3 col-sm-3 ml-2 my-4">
                            <div class="card rounded-0 my-1 ms-2">
                                <a href="{{ url('/client/question_detail/' . $question->id) }}">
                                    <img src="{{ asset('image/' . $question->photo) }}" alt="img" height="175"
                                        width="415" class="card-amg-top">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $question->questionName }}</h5>
                                    <div class="body">
                                        <p class="description">
                                            {{ $question->description }}
                                        </p>
                                        @if ($question->category->id === 1)
                                            <span class="badge bg-warning rounded-0">{{ $question->category->name }}</span>
                                        @else
                                            <span class="badge bg-info rounded-0">{{ $question->category->name }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                            $i++;
                        @endphp
                        @if ($i % 4 == 0 || $loop->last)
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-end">
            {{ $questions->links() }}
        </div>
    </div>

    </div>


</body>

</html>
