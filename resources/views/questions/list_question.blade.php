
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Detailsport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List_Question</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        th {
            font-size: 30px;
        }
        body {
            /* background-image: url('{{ asset('image/streaming5.png') }}'); */
            font-size: 25px;
        }
    </style>

</head>
<body>
    <div class="row" style="margin: 25px;">
        <div class="col-12">
            <div class="card card-sm">
                <div class="card-header">
                    <h2 style="text-align: center;">Liste Des Questions</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ url('/questions/add_question') }}" class="btn btn-warning btn-lg" title="Add New Question">
                    Add Question
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <thead style="color: #fff; background-color:black;">
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Categorie</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Video</th>
                                <th>Solution</th>
                                <th>Actions</th>
                            </tr>
                            {{-- @foreach ($users as $user) --}}
                        </thead>
                        <tbody>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
