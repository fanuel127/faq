<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Details_Utilisateurs</title>
    <style>
        table tr td {
            vertical-align: middle;
        }

        td button {
            margin: 10px;
        }

        td button {
            font-size: 20px;
        }

        .modal-header {
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
            /* flex-basis: 32% ;
            height: 100%; */
            width: 200px;
            height: 200px;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }

        .imgholder .upload {
            position: absolute;
            bottom: 0;
            left: 10;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: none;
            justify-content: center;
            align-items: center;
            cursor: pointer;
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
        }
    </style>

</head>
<body>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#readData" style="margin-left: 28%; margin-top:28"></button>

    {{-- <section class="p-3">

        <div class="row">
            <div class="col-12">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#userForm">Nouvel Utilisateur <i
                        class="bi bi-people"></i> </button>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover mt-3 text-center table-bordered">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Genre</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody id="data">
                        <tr>
                            <td>1</td>
                            <td> <img src="{{ asset('image/image1.png') }}" width="50" height="50"></td>
                            <td>Sounna</td>
                            <td>Silva</td>
                            <td>Masculin</td>
                            <td>Silva@gmail.com</td>
                            <td>682720464</td>
                            <td>Activer</td>
                            <td>
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#readData"><i
                                        class="bi bi-eye"></i></button>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>

                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td> <img src="{{ asset('image/image1.png') }}" width="50" height="50"></td>
                            <td>Sounna</td>
                            <td>Silva</td>
                            <td>Masculin</td>
                            <td>Silva@gmail.com</td>
                            <td>682720464</td>
                            <td>Activer</td>
                            <td>
                                <button class="btn btn-success"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>

                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td> <img src="{{ asset('image/image1.png') }}" width="50" height="50"></td>
                            <td>Sounna</td>
                            <td>Silva</td>
                            <td>Masculin</td>
                            <td>Silva@gmail.com</td>
                            <td>682720464</td>
                            <td>Activer</td>
                            <td>
                                <button class="btn btn-success"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>

                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td> <img src="{{ asset('image/image1.png') }}" width="50" height="50"></td>
                            <td>Sounna</td>
                            <td>Silva</td>
                            <td>Masculin</td>
                            <td>Silva@gmail.com</td>
                            <td>682720464</td>
                            <td>Activer</td>
                            <td>
                                <button class="btn btn-success"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>

                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

    </section>

    <div class="modal fade" id="userForm">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">remplir le formulaire</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="#" id="myForm">

                        <div class="card imgholder">
                            <label for="imgInput" class="upload">
                                <input type="file" name="" id="imgInput">
                                <i class="bi bi-plus-circle"></i>
                            </label>
                            <img src="{{ asset('image/user.png') }}" width="200" height="200">
                        </div>

                        <div class="inputField">
                            <div>
                                <label for="name">Nom</label>
                                <input type="text" name="" id="name">
                            </div>
                            <div>
                                <label for="prenom">Prenom</label>
                                <input type="text" name="" id="prenom">
                            </div>
                            <div>
                                <label for="genre">Genre</label>
                                <input type="text" name="" id="genre">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="" id="email">
                            </div>
                            <div>
                                <label for="phone">Telephone</label>
                                <input type="text" name="" id="phone" minlength="11" maxlength="11">
                            </div>
                            <div>
                                <label for="status">Status</label>
                                <input type="text" name="" id="status">
                            </div>
                        </div>

                    </form>

                </div>

                <div class="modal-footer">
                    <button type="submit" form="myForm" class="btn btn-warning submit">Enregistrer</button>
                </div>

            </div>
        </div>
    </div>  --}}

    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#readData" style="margin-left: 45%; margin-top:20%;width:150px;height:70px;"><i

        class="bi bi-eye"></i></button>

    <div class="modal fade" id="readData">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="#" id="myForm">

                        {{-- <div class="card imgholder">
                            <img src="{{ asset('image/user.png') }}" width="200" height="200">
                        </div> --}}

                        <div class="inputField">
                            <div>
                                <label for="name">Nom</label>
                                <input type="text" name="" id="name" disabled>
                            </div>
                            <div>
                                <label for="prenom">Prenom</label>
                                <input type="text" name="" id="prenom" disabled>
                            </div>
                            <div>
                                <label for="genre">Genre</label>
                                <input type="text" name="" id="genre" disabled>
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="" id="email" disabled>
                            </div>
                            <div>
                                <label for="phone">Telephone</label>
                                <input type="text" name="" id="phone" minlength="11" maxlength="11"
                                    disabled>
                            </div>
                            <div>
                                <label for="status">Status</label>
                                <input type="text" name="" id="status" disabled>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</body>
</html>
