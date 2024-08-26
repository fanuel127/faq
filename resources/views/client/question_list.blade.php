<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        }

        .card:hover {
            transform: scale(1.1);
        }
    </style>

</head>

<body>
    <div class="container py-5">
        <div class="row">
            <header>
                <h3>Accueil</h3>
            </header>
            <div class="content">
                <div class="col-md-12 col-sm-12">
                    <div class="card-list mt-4 d-flex justify-content-center ">
                        <div class="col-md-3 ml-2 mx-4">
                            <div class="card rounded-0">
                                <a href="{{ url('/client/question_detail') }}">
                                    <img src="{{ asset('image/img1.jpg') }}" alt="img" height="150" width="322"
                                    class="card-amg-top">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"> weitypwierytpweytwerioytpieoy</h5>
                                    <div class="body ">
                                        <p class="description">
                                            weitypwierytpweytwerioytpieoy weitypwierytpweytwerioytpieoy weit
                                            weitypwierytpwey twerioytpieoy weitypwierytpweytwerioytpieoy
                                        </p>
                                        <span class="badge bg-danger rounded-0">Reseau</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ml-2 mx-4 ">
                            <div class="card rounded-0">
                                <a href="{{ url('/client/question_detail') }}">
                                    <img src="{{ asset('image/img2.jpg') }}" alt="img" height="150" width="322"
                                    class="card-amg-top">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"> weitypwierytpweytwerioytpieoy</h5>
                                    <div class="body ">
                                        <p class="description">
                                            weitypwierytpweytwerioytpieoy weitypwierytpweytwerioytpieoy weit
                                            weitypwierytpwey twerioytpieoy weitypwierytpweytwerioytpieoy
                                        </p>
                                        <span class="badge bg-info rounded-0">Serveur</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ml-2 mx-4 ">
                            <div class="card rounded-0">
                                <a href="{{ url('/client/question_detail') }}">
                                    <img src="{{ asset('image/img3.jpg') }}" alt="img" height="150" width="322"
                                    class="card-amg-top">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"> weitypwierytpweytwerioytpieoy</h5>
                                    <div class="body ">
                                        <p class="description">
                                            weitypwierytpweytwerioytpieoy weitypwierytpweytwerioytpieoy weit
                                            weitypwierytpwey twerioytpieoy weitypwierytpweytwerioytpieoy
                                        </p>
                                        <span class="badge bg-info rounded-0">Serveur</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mr-2 mx-4 ">
                            <div class="card rounded-0">
                                <a href="{{ url('/client/question_detail') }}">
                                    <img src="{{ asset('image/img4.png') }}" alt="img" height="150" width="322"
                                    class="card-amg-top">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"> weitypwierytpweytwerioytpieoy</h5>
                                    <div class="body ">
                                        <p class="description">
                                            weitypwierytpweytwerioytpieoy weitypwierytpweytwerioytpieoy weit
                                            weitypwierytpwey twerioytpieoy weitypwierytpweytwerioytpieoy
                                        </p>
                                        <span class="badge bg-warning rounded-0">Connexion</span>
                                    </div>
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
