<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>create Question</title>
</head>
<style>
    body {
        font-size: 18px;
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


    .form-select {
        border-radius: 0px;

    }

    .btn {
        border-radius: 0px;
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
                                    <h5><i class="bi bi-plus-square-fill me-2"></i>Add Question</h5>
                                </div>
                                {{-- < class="btn btn-info btn-sm text-center"> --}}
                                <a href="{{ url('/question') }}" class="btn btn-primary btn-sm" title="add a question">

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

                                            <label for="firstname" class="form-label mt-3">
                                                Question
                                                <span class="text-danger">
                                                    *
                                                </span>
                                            </label>
                                            <input type="text" name="firstname" class="form-control "
                                                id="firstname">

                                            </input>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="Video" class="form-label mt-3">
                                                            Video
                                                        </label>
                                                        <input type="file" name="Video"
                                                            class="form-control " id="Video">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="Photo" class="form-label mt-3">
                                                            Photo
                                                            <span class="text-danger">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input type="file" name="Photo"
                                                            class="form-control " id="Photo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category" class="form-label mt-3">
                                                Category
                                                <span class="text-danger">
                                                    *
                                                </span>
                                            </label>
                                            <select class="form-select" name="category" id="category">
                                                <option selected disabled>select the Category </option>
                                                <option value="">Server Problem</option>
                                                <option value="">Connection Problem</option>
                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <label for="text" class="form-label mt-3">
                                                Answer
                                                <span class="text-danger">
                                                    *
                                                </span>
                                            </label>
                                            <input type="text" name="Answer" class="form-control  "
                                                id="Answer">
                                            </input>
                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="Description" class="form-label mt-3">
                                            Description

                                        </label>
                                        <textarea type="Description" name="Description" class="form-control " id="Description">

                                            </textarea>

                                    </div>
                                    <div class="btn mt-3 d-flex justify-content-between">
                                        <button type="reset" class="btn btn-danger btn-sm " id="btn">
                                            <i class="bi bi-backspace-fill me-2"></i>Cancel
                                        </button>
                                        <button type="submit" class="btn btn-warning btn-sm" id="btn">
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

    </form>

</body>

</html>
