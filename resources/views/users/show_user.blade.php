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
        /* .lbl {
            color: black;
            width: 200px;
            font-weight: bold;
            background-color: #dddddd;
            border-radius: 5px;
            font-size: 16px;
            padding-left: 11px;
            padding-right: 4px;
            padding-bottom: 5px;
            margin-right: 100px;
            margin-bottom: 70px;
        } */
    </style>
</head>
<body>
    <div class="container py-8">
        <table class="table" style="border: 2px;">
            <tr>
                <td>
                    <p> <b> ID : </b> {{ $users->id }} </p>
                    <p> <b> Nom : </b> {{ $users->firstName }} </p>
                    <p> <b> Prenom : </b> {{ $users->lastName }} </p>
                    <p> <b> Email : </b> {{ $users->email }} </p>
                    <p> <b> Genre : </b> {{ $users->gender }} </p>
                    <p> <b> Numero : </b> {{ $users->phoneNumber }} </p>
                    <p> <b> Role : </b> {{ $users->role_id }} </p>
                </td>
            </tr>
        </table>
        <div class="mb-3 mt-3">
            <button type="button" class="btn btn-lg btn-primary"
                style="width: 300px ;"><a href="{{ url('/users/list_user') }}" style="text-decoration: 0; color:black;">Annuler</a></button>
        </div>
    </div>
</body>
</html>
