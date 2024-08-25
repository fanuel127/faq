<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script> --}}
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
    <title>create test</title>
</head>
<style>
    body {
        background-color: rgba(248, 237, 237, 0.648);
    }

    .card-body {
        background-color: lightgray;
    }

    .card-header {
        background-color: lightslategray;
        color: white;
    }

    .form-control {
        border-radius: 0px;
    }

    .btn {
        border-radius: 0px;
    }

    span {
        font-weight: 900;
    }
</style>

<body>

    <form action="" method="">

        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-header text-center">
                            <div class="card-title  d-flex justify-content-between">
                                <div class=" text-center">
                                    <h4><i class="bi bi-plus-square-fill me-2"></i>Add User</h4>
                                </div>
                                {{-- < class="btn btn-info btn-sm text-center"> --}}
                                <a href="{{ url('/test') }}" class="btn btn-warning btn-sm" title="add a user">

                                    <i class="bi bi-arrow-return-left"></i> Return
                                </a>
                            </div>

                        </div>
                        <div class="card-body ">
                            <div class="fw-bold">
                                Fields with an asterisk (<span class="text-danger">*</span>) are required
                            </div>
                            <div class="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="firstname" class="form-label mt-2">
                                                First Name
                                                <span class="text-danger">
                                                    *
                                                </span>
                                            </label>
                                            <input type="text" name="firstname" class="form-control form-control-sm"
                                                id="firstname">

                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="form-label mt-2">
                                                Email
                                                <span class="text-danger">
                                                    *
                                                </span>
                                            </label>
                                            <input type="email" name="email" class="form-control form-control-sm "
                                                id="email">
                                        </div>
                                        <div class="form-group">

                                            <label for="password" class="form-label mt-2">
                                                Password
                                                <span class="text-danger">
                                                    *
                                                </span>
                                            </label>
                                            <input type="password" name="password" class="form-control form-control-sm"
                                                id="password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="lastname" class="form-label mt-2">
                                                Last Name
                                            </label>
                                            <input type="text" name="lastname" class="form-control form-control-sm"
                                                id="lastname">
                                        </div>
                                        <div class="form-group">

                                            <label for="PhoneNumber" class="form-label mt-2">
                                                Phone Number
                                                <span class="text-danger">
                                                    *
                                                </span>
                                            </label>
                                            <input type="number" name="PhoneNumber"
                                                class="form-control form-control-sm" id="PhoneNumber">
                                        </div>
                                        <div class="form-group">

                                            <label for="Confirmation" class="form-label mt-2">
                                                Password Confirmation
                                                <span class="text-danger">
                                                    *
                                                </span>
                                            </label>
                                            <input type="password" name="Confirmation"
                                                class="form-control  form-control-sm" id="Confirmation">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender" class="form-label mt-2">
                                            Gender
                                        </label>
                                        <select class="form-select form-select-sm" name="gender" id="gender">
                                            <option selected disabled>Select your gender</option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                        </select>
                                    </div>
                                    <div class="btn mt-3 d-flex justify-content-between">
                                        <button type="reset" class="btn btn-danger btn-sm " id="btn">
                                            <i class="bi bi-backspace-fill me-2"></i>Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary btn-sm" id="btn">
                                            <i class="bi bi-save me-2"></i>Submit
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </form>

</body>

</html>
