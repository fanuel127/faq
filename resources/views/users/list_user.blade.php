

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

        /* table tr td {
            vertical-align: middle;
        }

        td button {
            margin: 10px;
        }

        td button {
            font-size: 20px;
        } */

        /* .modal-header {
            background: orange;
            color: black;
        }

        .modal-body form {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 0;
        }

        .modal-body form .imgholder {
            width: 200px;
            height: 200px;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }

        .upload i {
            color: #fff;
            font-size: 35px;
        }

        .imgholder .upload input {
            display: none;
        }

        .imgholder:hover .upload {
            display: flex;
        }

        .modal-body form .inputField {
            flex-basis: 68%;
            border-left: 5px groove orange;
            padding-left: 20px;
        }

        form .inputField>div {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        form .inputField>div label {
            font-size: 20px;
            font-weight: 500;
        }

        #userForm form .inputField>div label::after {
            content: "*";
            color: red;
        }

        form .inputField>div input {
            width: 75%;
            padding: 10px;
            border: none;
            outline: none;
            background: transparent;
            border-bottom: 3px groove orange;
        }

        .modal-footer .submit {
            font-size: 18px;
        }

        #readData form .inputField>div input {
            color: #000;
            font-size: 18px;
        } */
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
                                <th colspan="3">Actions</th>
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
                                <td>
                                    <a href="{{ url('/users/update/' . $user->id) }}" class="btn btn-primary"style="text-decoration: 0;color:black;">Edit</a>
                                </td>
                                <td>
                                    <form method="POST">
                                        <a class="btn btn-success" href="{{ url('/users/show_user/' . $user->id) }}"style="text-decoration: 0;color:black;">Details</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="readData">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="#" id="myForm">

                        <div class="card imgholder">
                            <img src="{{ asset('image/user.png') }}" width="200" height="200">
                        </div>

                        <div class="inputField">
                            <div>
                                <label for="name">Nom : {{ $users->firstName }} </label>
                                <input type="text" name="" id="name" >
                            </div>
                            <div>
                                <label for="prenom">Prenom : {{ $users->lastName }} </label>
                                {{-- <input type="text" name="" id="prenom">
                            </div>
                            <div>
                                <label for="genre">Genre : {{ $users->gender }} </label>
                                <input type="text" name="" id="genre">
                            </div>
                            <div>
                                <label for="email">Email : {{ $users->email }}</label>
                                {{-- <input type="email" name="" id="email">
                            </div>
                            <div>
                                <label for="role">role : {{ $users->role_id }}</label>
                                {{-- <input type="text" name="" id="role">
                            </div>
                            <div>
                                <label for="phone">Telephone :{{ $users->phoneNumber }}</label>
                                {{-- <input type="text" name="" id="phone" minlength="11" maxlength="11"
                                >
                            </div>
                            <div>
                                <label for="status">Status : {{ $users->status }}</label>
                                {{-- <input type="text" name="" id="status">
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div> --}}

</body>

</html>
