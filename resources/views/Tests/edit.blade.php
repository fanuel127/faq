<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>

<<<<<<< Updated upstream
=======
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/2.1.2/dataTables.bootstrap5.min.js"
        integrity="sha512-Cwi0jz7fz7mrX990DlJ1+rmiH/D9/rjfOoEex8C9qrPRDDqwMPdWV7pJFKzhM10gAAPlufZcWhfMuPN699Ej0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
>>>>>>> Stashed changes
    <title>edit test</title>
</head>


<body>
     <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>

            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('Test.update',['Test' => $Test]) }}">
        @csrf
        @method('put')
    <div class="container p-5 ">

        <h2 class="text-center text-info">FORM</h2>
        <div class="row">
            <div class="col-md 4 d-flex justify-content-center">

                <div class="form-action  bg-info rounded-2 ">
                    <div class="form-control-lg">
                        <!--name-->
                        <div class="mb-3 mt-3 ">
                            <label for="firstName" class="form-label">firstName:</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter your firstName" value="{{ $Test->firstName}}">
                            <!--email-->
                            <div class="mb-3 ">
                                <label for="description" class="form-label">description:</label>
                                <input type="text" name="description" class="form-control" id="description"
                                    placeholder="Enter your description"  value="{{ $Test->description}}">
                                <br>
                                <button type="submit" class="btn btn-warning">update</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
</body>

</html>

