{{--

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Detailsport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List_User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

<body> --}}

@extends('layouts.admin')

@section('content')
    <div style="display:flex; justify-content:space-between;margin: 30px;background-color:#fff;">
        <h4>Gestions des utilisateurs</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Accueil</li>
                <li class="breadcrumb-item">Utilisateurs</li>
                <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
            </ol>
        </nav>

    </div>
    <div class="row" style="margin: 10px;">
        <div class="col-12">
            <div class="card card-sm">
                <div class="card-header">
                    <h2>Liste des utilisateurs</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <br>
                <div style="display:flex; justify-content:space-between;">
                    <form class="d-flex" action="{{ route('users.total') }}" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search"
                            aria-label="Search" style="height: 60px ; width:280px;">
                        <button class="btn btn-outline-light btn-success" type="submit"
                            style="width:150px;">Search</button>
                    </form>
                    <form action="{{ route('users.total') }}" method="GET" style="display:flex; justify-content:space-between;">
                        <div class="form-group">
                            <label for="sort">Trier par :</label>
                            <select name="sort" id="sort" class="form-control">
                                <option value="">Sélectionner un tri</option>
                                <option value="asc">Ordre croissant</option>
                                <option value="desc">Ordre décroissant</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 90px;">Classer</button>
                    </form>

                    {{-- <h2>Totale des utilisateurs : ({{ $usersCount }}) </h2> --}}
                    <a href="{{ url('/users/add_user') }}" class="btn btn-warning btn-lg" title="Add New User">
                        <i class="bi bi-plus-square-fill me-2"></i>Ajouter
                    </a>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" border="1">
                        <thead class="table-dark" style="color: #fff; background-color:black;">
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Genre</th>
                                <th>Email</th>
                                <th>Numero</th>
                                <th>Statut</th>
                                <th>role</th>
                                <th colspan="3">Actions</th>
                            </tr>
                            @foreach ($users as $user)
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->firstName }}</td>
                                <td>{{ $user->lastName }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phoneNumber }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->role_id }}</td>
                                <td>
                                    <a href="{{ url('/users/update/' . $user->id) }}"
                                        class="btn btn-primary"style="text-decoration: 0;color:black; width:80px">Edit</a>
                                </td>
                                <td>
                                    <form method="POST">
                                        <a class="btn btn-success"
                                            href="{{ url('/users/show_user/' . $user->id) }}"style="text-decoration: 0;color:black;">Details</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $users->links() }} --}}
                    {{-- <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end pagination-lg">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav> --}}

                </div>

            </div>
        </div>
    </div>
@endsection
{{-- </body>

</html> --}}
