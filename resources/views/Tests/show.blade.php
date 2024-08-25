<!DOCTYPE html>
<html lang="en">

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
    <title>Detail</title>
</head>
<style>
    .card {
        margin: 6%;
        /* height: 70vh; */

    }

    .badge {
        border-radius: 0px;
        font-size: 16px;
    }

    .card-title {
        color: white;
        font-size: bold;
    }

    .card-body {}

    i {
        color: orange;

    }

    .photo {
        height: 350px;
        width: 80vh;
        box-shadow: 0 8px 9px rgba(19, 2, 2, 0.575);

    }

    .btn {
        border-radius: 0px;
    }
</style>

<body>
    <div class="card">
        <div class="card-header d-flex justify-content-between  bg-secondary text-center ">
            <div class="card-title text-center ">
                <h4> <i class="bi bi-person-fill me-2"></i>User Details</h4>
            </div>
            {{-- <a href="{{ url('/test' ) }}" class="btn btn-info text-center btn-xm rounded-0">
                <i  class="bi bi-arrow-return-left"></i>
                Return
            </a> --}}
        </div>
        <div class="card-body bg-light">

            <div class="row d-flex">
                <div class="col-md-6">
                    <img src="{{ asset('image/female.png') }}" alt="Sample Photo 1" class="photo">

                </div>

                <div class="col-md-6">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-text mb-2 "><i class="bi bi-person-circle me-2"></i>FirstName : </h5>
                            <h5>Kemadjou</h5>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="card-text mb-2"><i class="bi bi-person me-2"></i>LastName : </h5>
                            <h5>Daniel</h5>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="card-text mb-2"><i class="bi bi-gender-male me-2"></i>Gender : </h5>
                            <h5>male</h5>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="card-text mb-2"><i class="bi bi-envelope-fill me-2"></i>Email : </h5>
                            <h5>Daniel@gmail.com</h5>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="card-text mb-2"><i class="bi bi-telephone-fill me-2"></i> Phone Number :
                            </h5>
                            <h5>67878787</h5>
                        </div>
                        <hr>
                        <span class="badge text-bg-danger mb-2">disable</span>

                        {{-- <h5 class="card-text">role_id : {{ $users->role_id }}</h5> --}}
                    </div>


                </div>
            </div>
        </div>
        <div class="card-footer bg-light d-flex justify-content-between">
            <a href="{{ url('/test') }}" class="btn btn-info text-center btn-xm rounded-0 text-white ">
                <i class="bi bi-arrow-return-left text-white"></i>
                Return
            </a>
            <div class="">
                <a href="{{ url('/test/edit') }}" class="btn btn-warning text-white " title="Modify">
                    <i class="fas fa-edit text-white me-2 "></i>Edit
                </a>
                <button class="btn btn-success"><i class="bi bi-check-square-fill me-2 text-white"></i>
                    Enable
                </button>
            </div>

        </div>
    </div>

</body>

</html>
