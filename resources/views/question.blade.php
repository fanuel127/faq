<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pages des Questions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <style>
        body {
            background-color: black;
            color: rgb(215, 12, 114);
        }
        input , textarea { height: 65px ;}
    </style>
</head>
<body>
    <div class="container py-3">
        <div class="row justify-content-center">
            <form action=""  class="col-md-8" >
                <h1 style="color: greenyellow ; text-align :center"> <strong>Question Management</strong> </h1>
                <hr>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> <h4>Question name</h4> </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea2 form-group col-md-6 mb-3" class="form-label"> <h4>Question description</h4> </label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea3 form-group col-md-6 mb-3" class="form-label"> <h4>Question category</h4> </label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label"> <h4>Image for the question</h4> </label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label"> <h4>Video for the question</h4> </label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> <h4>Solution to the question</h4> </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <br>
                <div class="mb-3">
                    <button type="button" class="btn btn-success btn-lg rounded-pill" style="width: 600px ; height: 60px ; margin-left: 15%">Create_Question</button>
                </div>
            </form>
            <!-- <div class="col-md-12 py-5">
                <table class="table table-dark table-striped col-12">
                    <thead>
                      <tr>
                        <th scope="col"> <h3>#</h3> </th>
                        <th scope="col"> <h3>Name</h3> </th>
                        <th scope="col"> <h3>Email</h3> </th>
                        <th scope="col"> <h3>Password</h3> </th>
                        <th scope="col"> <h3>Status</h3> </th>
                        <th scope="col"> <h3>Modify</h3> </th>
                        <th scope="col"> <h3>Enable or Disable</h3> </th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark@gmail.com</td>
                            <td>12345677</td>
                            <td>Actif</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Jacob@gmail.com</td>
                            <td>12345676</td>
                            <td>Actif</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark@gmail.com</td>
                            <td>12345677</td>
                            <td>Actif</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Jacob@gmail.com</td>
                            <td>12345676</td>
                            <td>Actif</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark@gmail.com</td>
                            <td>12345677</td>
                            <td>Actif</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
            </div> -->
        </div>
    </div>

</body>
</html>

