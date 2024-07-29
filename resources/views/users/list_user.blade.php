{{-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="Detailsport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List_Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: white;
        }

        a {
            color: black;
            text-decoration: 0;
        }

        .panel {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transition: width 0.3s ease-in-out, opacity 0.3s ease-in-out;
            opacity: 0;
            pointer-events: none;
            z-index: 1000;
        }

        .panel.open {
            width: 600px;
            opacity: 1;
            pointer-events: auto;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #f1f1f1;
        }

        .panel-body {
            padding: 1rem;
        }

        .gauche {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .gauche h1:first-child {
            margin-right: auto;
        }

        .gauche a:last-child {
            margin-left: auto;
        }

        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-body h5:first-child {
            margin-right: auto;
        }

        .card-body a:last-child {
            margin-left: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Hidden brand</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Questions</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="card bg-secondary">
        <div class="card-body">
            <h5 class="card-title" style="color: white;font-size:20px;">Gestion des utilisateurs</h5>
            <a href="#" class="btn btn-primary">Gestion des questions</a>
            <a href="#" class="btn btn-danger">se deconnecter</a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="gauche">
                    <h1 style="color:orange;text-align:center;margin-top:25px;padding-bottom:12px;">
                        Listes des utilisateurs
                    </h1>
                    <a href="add_user" class="btn btn-primary">Ajouter</a>
                </div>
                <table class="table table-striped table-hover align-middle">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">
                                <h3>#</h3>
                            </th>
                            <th scope="col">
                                <h3>Nom</h3>
                            </th>
                            <th scope="col">
                                <h3>Prenom</h3>
                            </th>
                            <th scope="col">
                                <h3>Genre</h3>
                            </th>
                            <th scope="col">
                                <h3>Adresse Email</h3>
                            </th>
                            <th scope="col">
                                <h3>Numero</h3>
                            </th>
                            <th scope="col">
                                <h3>Status</h3>
                            </th>
                            <th scope="col">
                                <h3>Actions</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td>
                                <button id="myButton" class="btn btn-secondary">Activer</button>
                            </td>
                            <td>
                                <div class="d-flex text-center">
                                    <a href="{{ url('list_user/'.$item->id.'/edit') }}" class="btn btn-warning">
                                        modifier
                                    </a>
                                    <button id="open-panel-btn" class="btn btn-info mx-3">details</button>
                                    <div class="form-check form-switch">
                                        <label class="switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="mySwitch"><span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div id="user-info-panel" class="panel">
                    <div class="panel-header">
                        <h3>Informations</h3>
                        <button id="close-panel-btn" class="btn btn-warning">
                            Fermer
                        </button>
                    </div>
                    <div class="panel-body">
                        <p>Prenom : </p> <br>
                        <p>Nom : </p> <br>
                        <p>Genre : </p> <br>
                        <p>Email : </p> <br>
                        <p>Numero de telephone : </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-lg justify-content-end">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>


    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     var panel = document.getElementById('user-info-panel');
        //     var openBtns = document.querySelectorAll('#open-panel-btn');
        //     var closeBtn = document.getElementById('close-panel-btn');

        //     openBtns.forEach(function(btn) {
        //         btn.addEventListener('click', function() {
        //             panel.classList.add('open');
        //         });
        //     });

        //     closeBtn.addEventListener('click', function() {
        //         panel.classList.remove('open');
        //     });

        // });
    </script>
    <script>
        // const mySwitches = document.querySelectorAll('.switch input');
        // const myButtons = document.querySelectorAll('#myButton');

        // mySwitches.forEach((mySwitch, index) => {
        //     mySwitch.addEventListener('change', function() {
        //         if (this.checked) {
        //             myButtons[index].textContent = 'Activer';
        //             myButtons[index].classList.remove('btn-danger');
        //             myButtons[index].classList.add('btn-success');
        //         } else {
        //             myButtons[index].textContent = 'Desactiver';
        //             myButtons[index].classList.remove('btn-success');
        //             myButtons[index].classList.add('btn-danger');
        //         }
        //     });
        // });
    </script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Detailsport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List_User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        th {
            font-size: 30px;
        }
        body {
            background-image: url('{{ asset('image/streaming5.png') }}');
            font-size: 25px;
        }
    </style>

</head>
<body>
    {{-- <div class="container">
        <div class="row" style="margin: 25px;">
            <div class="col-12">
                <div class="card card-lg">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD</h2>
                    </div>
                    <div class="card-body" style="margin-top: 25px;">
                        <a href="" class="btn btn-success btn-lg" title="Add New User">
                            Add New
                        </a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Genre</th>
                                        <th>Email</th>
                                        <th>Numero</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ken</td>
                                        <td>fanuel</td>
                                        <td>masculin</td>
                                        <td>ken@gmail.com</td>
                                        <td>377893619</td>
                                        <td>Activer</td>
                                        <td>
                                            <a href="" title="Details User"><button class="btn btn-info btn-lg"><i class="fa fa-eye" aria-hidden="true"></i>Details</button></a>
                                            <a href="" title="Edit User"><button class="btn btn-primary btn-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                            <a href="" title="Delete User"><button class="btn btn-danger btn-lg"><i class="fa fa-eye" aria-hidden="true"></i>Delete</button></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row" style="margin: 25px;">
        <div class="col-12">
            <div class="card card-sm">
                <div class="card-header">
                    <h2 style="text-align: center;">Liste Des Utilisateurs</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ url('/users/add_user') }}" class="btn btn-warning btn-lg" title="Add New User">
                    Add New
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <thead style="color: #fff; background-color:black;">
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Genre</th>
                                <th>Email</th>
                                <th>Numero</th>
                                <th>Statut</th>
                                <th>role</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($users as $user)
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td>1</td>
                                <td>ken</td>
                                <td>fanuel</td>
                                <td>masculin</td>
                                <td>ken@gmail.com</td>
                                <td>377893619</td>
                                <td>Activer</td>
                                <td>
                                    <a href="" title="Details User"><button class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i>Details</button></a>
                                    <a href="" title="Edit User"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                    <a href="" title="Delete User"><button class="btn btn-danger"><i class="fa fa-eye" aria-hidden="true"></i>Delete</button></a>
                                </td>
                            </tr> --}}
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->firstName }}</td>
                                <td>{{ $user->lastName }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phoneNumber }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->role_id }}</td>
                                <td> <a href="{{ route('/users/update/'.$user->id ) }}">Edit</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
