{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Users Lists</h1>
<div>
    <table>
        <tr>
            <th>id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Genre</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        @foreach ($Test as $test)
<tr>
    <td>{{ $test->id }}</td>
    <td>{{ $test->firstName }}</td>
    <td>{{ $test->lastName }}</td>
    <td>{{ $test->gender }}</td>
    <td>{{ $test->email }}</td>
    <td>{{ $test->phoneNumber }}</td>
    <td>



    <td><a href="{{ route('/Test.edit/'.$test->id) }}">Edit</a></td>
</tr>
        @endforeach
    </table>
</div>
</body>
</html> --}}
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
    <title>list</title>
</head>
<style>
    body {
        font-size: 20px;
        /* background-color:  rgb(177, 199, 212); */
        background-color: white;

    }


    .card-body {
        background-color: whitesmoke;
        border: none;

    }

    .card-header {
        background-color: lightslategray;
        color: white;

    }

    /* .card{
        margin-left: 400px;
    } */
</style>

<body>
    <div class="container-fluid p-5 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4 text-center">
                    <div class="card-header ">
                        <div class="card-title d-flex justify-content-between">
                            <h4><i class="bi bi-list-ul me-2"></i>Users Lists</h4>
                            <a href="{{ url('/test/create') }}" class="btn btn-warning" title="add a user">
                                <i class="bi bi-plus"></i>
                                Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <table class="table table-striped">
                            <thead class="table-danger ">
                                <tr>
                                    <th>#</th>
                                    <th>LastName</th>
                                    <th>FirstName</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>samira </td>
                                    <td> kamsou </td>
                                    <td> female </td>
                                    <td> samira@gmail.com </td>
                                    <td> 67898565 </td>
                                    <td> <span class="badge text-bg-danger">disable</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-ml" title="Modify">
                                            <i class="fas fa-edit "></i>edit
                                        </button>
                                        <button class="btn btn-info btn-ml" title="show"><i class="fa fa-eye"></i>
                                            View
                                        </button>

                                    </td>


                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>samira </td>
                                    <td> kamsou </td>
                                    <td> female </td>
                                    <td> samira@gmail.com </td>
                                    <td> 67898565 </td>
                                    <td> <span class="badge text-bg-success">enable</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-ml" title="Modify">
                                            <i class="fas fa-edit "></i>edit
                                        </button>
                                        <button class="btn btn-info btn-ml" title="show"><i class="fa fa-eye"></i>
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>vincent </td>
                                    <td> kamsou </td>
                                    <td> male </td>
                                    <td> vincent@gmail.com </td>
                                    <td> 6780903 </td>
                                    <td> <span class="badge text-bg-success">enable</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-ml" title="Modify">
                                            <i class="fas fa-edit "></i>edit
                                        </button>
                                        <button class="btn btn-info btn-ml" title="show"><i class="fa fa-eye"></i>
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>samira </td>
                                    <td> kamsou </td>
                                    <td> female </td>
                                    <td> samira@gmail.com </td>
                                    <td> 67898565 </td>
                                    <td> <span class="badge text-bg-danger">disable</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-ml" title="Modify">
                                            <i class="fas fa-edit "></i>edit
                                        </button>
                                        <button class="btn btn-info btn-ml" title="show"><i class="fa fa-eye"></i>
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>samira </td>
                                    <td> kamsou </td>
                                    <td> female </td>
                                    <td> samira@gmail.com </td>
                                    <td> 67898565 </td>
                                    <td> <span class="badge text-bg-success">enable</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-ml" title="Modify">
                                            <i class="fas fa-edit "></i>edit
                                        </button>
                                        <button class="btn btn-info btn-ml" title="show"><i class="fa fa-eye"></i>
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>arnord </td>
                                    <td> Tammo </td>
                                    <td> male </td>
                                    <td> arnord@gmail.com </td>
                                    <td> 67898565 </td>
                                    <td> <span class="badge text-bg-success">enable</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-ml" title="Modify">
                                            <i class="fas fa-edit "></i>edit
                                        </button>
                                        <button class="btn btn-info btn-ml" title="show"><i class="fa fa-eye"></i>
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>samira </td>
                                    <td> kamsou </td>
                                    <td> female </td>
                                    <td> samira@gmail.com </td>
                                    <td> 67898565 </td>
                                    <td> <span class="badge text-bg-success">enable</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-ml" title="Modify">
                                            <i class="fas fa-edit "></i>edit
                                        </button>
                                        <button class="btn btn-info btn-ml" title="show"><i class="fa fa-eye"></i>
                                            View
                                        </button>
                                    </td>
                                </tr>


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
