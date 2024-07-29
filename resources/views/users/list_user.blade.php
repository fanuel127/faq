

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
                                <td> <a href="{{ url('/users/update/'.$user->id ) }}">Edit</a> </td>
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
