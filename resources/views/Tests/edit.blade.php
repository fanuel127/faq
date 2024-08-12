<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>

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

