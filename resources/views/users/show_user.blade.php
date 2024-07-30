<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details_User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        p {
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <table class="table" style="border: 2px">
            <tr>
                <td>
                    <p> ID : <b> {{ $users->id }}</b> </p>
                    <p> Nom : <b> {{ $users->firstName }}</b> </p>
                    <p> Prenom : <b> {{ $users->lastName }}</b> </p>
                    <p> Genre : <b> {{ $users->gender }}</b> </p>
                    <p> Email : <b> {{ $users->email }}</b> </p>
                    <p> Numero : <b> {{ $users->phoneNumber }}</b> </p>
                    <p> Role : <b> {{ $users->role_id }}</b> </p>
                </td>
            </tr>
        </table>
        <div class="mb-3 mt-3">
            <button type="button" class="btn btn-lg btn-primary"
               style="width: 400px ;" ><a href="{{ url('/users/list_user') }}" style="color: black;text-decoration:0;">Annuler</a></button>
        </div>
    </div>
</body>
</html>
