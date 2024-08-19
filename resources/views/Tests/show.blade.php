<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/2.1.2/dataTables.bootstrap5.min.js"
        integrity="sha512-Cwi0jz7fz7mrX990DlJ1+rmiH/D9/rjfOoEex8C9qrPRDDqwMPdWV7pJFKzhM10gAAPlufZcWhfMuPN699Ej0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Detail</title>
</head>
<style>
    .card {
        margin: 8%;
        height: 50vh;

    }

    .card-title {
        color: white;
        font-size: bold;
    }

    .card-body {}

    i {
        color: orange;
    }
</style>

<body>
    <div class="card">
        <div class="card-header d-flex justify-content-between  bg-secondary">
            <div class="card-title text-center ">
                <h3> <i class="bi bi-person-fill me-2"></i>User Details</h3>
            </div>
            <a href="{{ url('/test') }}" class="btn btn-warning" title="add a user">

                <i class="bi bi-arrow-return-left"></i> Return
            </a>
        </div>
        <div class="card-body bg-light">
            <div class="row">
                <div class="col-3">
                    {{-- <img src="{{ asset('image/' . $image) }}">  --}}
                </div>
            </div>
            <div class=" ms-4">
                <h5 class="card-text mb-4 "><i class="bi bi-person-circle me-2"></i>FirstName : </h5>
                <hr>
                <h5 class="card-text mb-4"><i class="bi bi-person me-2"></i>LastName : </h5>
                <hr>
                <h5 class="card-text mb-4"><i class="bi bi-gender-ambiguous me-2"></i>Gender : </h5>
                <hr>
                <h5 class="card-text mb-4"><i class="bi bi-envelope-fill me-2"></i>Email : </h5>
                <hr>
                <h5 class="card-text mb-4"><i class="bi bi-telephone-fill me-2"></i> Phone Number : </h5>
                <hr>
                {{-- <h5 class="card-text">role_id : {{ $users->role_id }}</h5> --}}
            </div>
        </div>
    </div>



</body>

</html>
