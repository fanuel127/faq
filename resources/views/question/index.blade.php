<!DOCTYPE htsm>
<htsm lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOsmASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>list</title>
    </head>
    <style>
        body {
            background-color: rgba(248, 237, 237, 0.648);

        }
        .btn{
            border-radius: 0px;
        }
        .badge{
            border-radius: 0px;
   
        }

        #myinputs {
            font-size: 15px;
            box-shadow: 0px;

        }

        select option {
            font-size: 16px;
        }



        .card-body {
            border: none;

        }

        .card {
            font-size: 15px;
            border-radius: 0px;
 
        }

        .table {
            font-size: 13px;
        }


        .card-header {
            background-color: lightslategray;
            color: white;

        }

        .filter {
            font-size: 20px;
        }

        /* .card{
        margin-left: 400px;
    } */
    </style>

    <body>
        <div class="container-fluid  ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-4 text-center">
                        <div class="card-header ">
                            <div class="card-title d-flex justify-content-between">
                                <h5><i class="bi bi-list-ul me-2"></i> Lists Questions</h5>
                                <a href="{{ url('/question/create') }}" class="btn btn-warning btn-sm"
                                    title="add a question">
                                    <i class="bi bi-plus"></i>
                                    Add
                                </a>
                            </div>
                        </div>

                        <div class="card-body ">
                            <table class="table table-striped">

                                <div class="filter-bar d-flex justify-content-between bg-light mt-1 mb-2"
                                    id="filter-bar">
                                    <div class="order mt-3 mb-3">
                                        <label for="sort">Sort by..</label>
                                        <select class="filter" id="myinputs">
                                            <option value="" selected desabled>--</option>
                                            <option value="asc">ascending order</option>
                                            <option value="desc">descending order </option>
                                        </select>
                                    </div>
                                    <div class="sort mt-3 mb-3">
                                        <label for="">Of..</label>
                                        <select class="filter" name="sort" id="myinputs">
                                            <option value="" selected desabled>--</option>
                                            <option value="question">Question</option>
                                            <option value="category">Category</option>
                                        </select>
                                    </div>
                                    <div class="category mt-3 mb-3">
                                        <label for="">Category..</label>
                                        <select class="filter" name="category" id="myinputs">
                                            <option value="" selected desabled>--</option>
                                            <option value="">Server Problem</option>
                                            <option value="">Connection Problem</option>
                                        </select>
                                    </div>
                                    <div class="search mt-3 mb-3">
                                        <input class="filter" type="search" id="myinputs" name="search"
                                            placeholder="Search...">
                                    </div>
                                </div>
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Question</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Answer</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td> Which movie is recommended for me based on my preferences?
                                        </td>
                                        <td>The user wants a personalized movie recommendation, based on their specific
                                            tastes, previously viewed movies, and favorite genres. </td>
                                        <td> Personalized recommendations.
                                        </td>
                                        <td> Depending on your preferences for action and sci-fi films, I recommend
                                            'Inception' and 'John Wick'
                                        </td>
                                        {{-- <td> <img src="{{ asset('image/img4.png') }}" style="max-width:200px;"></td>
                                    <td> <iframe src="{{ asset('video/video1.mp4') }}"style="max-width:200px;"></iframe></td> --}}

                                        <td class="d-flex justify-content-between">
                                            <a href="{{ url('/question/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/question/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td> Which movie is recommended for me based on my preferences?
                                        </td>
                                        <td>The user wants a personalized movie recommendation, based on their specific
                                            tastes, previously viewed movies, and favorite genres. </td>
                                        <td> Personalized recommendations.
                                        </td>
                                        <td> Depending on your preferences for action and sci-fi films, I recommend
                                            'Inception' and 'John Wick'
                                        </td>
                                        {{-- <td> <img src="{{ asset('image/img4.png') }}"style="max-width:200px;"></td>
                                    <td> <iframe src="{{ asset('video/video1.mp4') }}"style="max-width:200px;"></iframe></td> --}}

                                        <td class="d-flex">
                                            <a href="{{ url('/question/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/question/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td> Which movie is recommended for me based on my preferences?
                                        </td>
                                        <td>The user wants a personalized movie recommendation, based on their specific
                                            tastes, previously viewed movies, and favorite genres. </td>
                                        <td> Personalized recommendations.
                                        </td>
                                        <td> Depending on your preferences for action and sci-fi films, I recommend
                                            'Inception' and 'John Wick'
                                        </td>
                                        {{-- <td> <img src="{{ asset('image/img4.png') }}"style="max-width:200px;"></td>
                                    <td> <iframe src="{{ asset('video/video1.mp4') }}"style="max-width:200px;"></iframe></td> --}}

                                        <td class="d-flex">
                                            <a href="{{ url('/question/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/question/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td> Which movie is recommended for me based on my preferences?
                                        </td>
                                        <td>The user wants a personalized movie recommendation, based on their specific
                                            tastes, previously viewed movies, and favorite genres. </td>
                                        <td> Personalized recommendations.
                                        </td>
                                        <td> Depending on your preferences for action and sci-fi films, I recommend
                                            'Inception' and 'John Wick'
                                        </td>
                                        {{-- <td> <img src="{{ asset('image/img4.png') }}"style="max-width:200px;"></td>
                                    <td> <iframe src="{{ asset('video/video1.mp4') }}"style="max-width:200px;"></iframe></td> --}}
                                        <td class="d-flex">
                                            <a href="{{ url('/question/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/question/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td> Which movie is recommended for me based on my preferences?
                                        </td>
                                        <td>The user wants a personalized movie recommendation, based on their specific
                                            tastes, previously viewed movies, and favorite genres. </td>
                                        <td> Personalized recommendations.
                                        </td>
                                        <td> Depending on your preferences for action and sci-fi films, I recommend
                                            'Inception' and 'John Wick'
                                        </td>
                                        {{-- <td> <img src="{{ asset('image/img4.png') }}"style="max-width:200px;"></td>
                                    <td> <iframe src="{{ asset('video/video1.mp4') }}"style="max-width:200px;"></iframe></td> --}}
                                        <td class="d-flex">
                                            <a href="{{ url('/question/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/question/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td> Which movie is recommended for me based on my preferences?
                                        </td>
                                        <td>The user wants a personalized movie recommendation, based on their specific
                                            tastes, previously viewed movies, and favorite genres. </td>
                                        <td> Personalized recommendations.
                                        </td>
                                        <td> Depending on your preferences for action and sci-fi films, I recommend
                                            'Inception' and 'John Wick'
                                        </td>
                                        {{-- <td> <img src="{{ asset('image/img4.png') }}"style="max-width:200px;"></td>
                                    <td> <iframe src="{{ asset('video/video1.mp4') }}"style="max-width:200px;"></iframe></td> --}}
                                        <td class="d-flex">
                                            <a href="{{ url('/question/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/question/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td> Which movie is recommended for me based on my preferences?
                                        </td>
                                        <td>The user wants a personalized movie recommendation, based on their specific
                                            tastes, previously viewed movies, and favorite genres. </td>
                                        <td> Personalized recommendations.
                                        </td>
                                        <td> Depending on your preferences for action and sci-fi films, I recommend
                                            'Inception' and 'John Wick'
                                        </td>
                                        {{-- <td> <img src="{{ asset('image/img4.png') }}"style="max-width:200px;"></td>
                                    <td> <iframe src="{{ asset('video/video1.mp4') }}"style="max-width:200px;"></iframe></td> --}}
                                        <td class="d-flex">
                                            <a href="{{ url('/question/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/question/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td> Which movie is recommended for me based on my preferences?
                                        </td>
                                        <td>The user wants a personalized movie recommendation, based on their specific
                                            tastes, previously viewed movies, and favorite genres. </td>
                                        <td> Personalized recommendations.
                                        </td>
                                        <td> Depending on your preferences for action and sci-fi films, I recommend
                                            'Inception' and 'John Wick'
                                        </td>
                                        {{-- <td> <img src="{{ asset('image/img4.png') }}"style="max-width:200px;"></td>
                                    <td> <iframe src="{{ asset('video/video1.mp4') }}"style="max-width:200px;"></iframe></td> --}}
                                        <td class="d-flex">
                                            <a href="{{ url('/question/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/question/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                        </td>
                                    </tr>
                                </tbody>


                            </table>
                            <nav aria-label="...">
                                <ul class="pagination  justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
    </body>

</htsm>
