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
        background-color: rgba(248, 237, 237, 0.648);

    }


    .card-body {
        background-color: rgb(177, 199, 212);
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
                            <h4><i class="bi bi-list-ul me-2"></i> Lists Questions</h4>
                            <a href="{{ url('/question/create') }}" class="btn btn-warning" title="add a question">
                                <i class="bi bi-plus"></i>
                                Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <table class="table table-striped">
                            <thead class="table-danger">
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Answer</th>
                                    <th>Photo</th>
                                    <th>Video</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @php
                                $i = 0;
                            @endphp

                            @php
                                $i++;
                            @endphp
                            <tbody>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>


                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>