<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier une question</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body {
            color: white;
            background-color: black;
        }

        input,
        textarea {
            height: 60px;
        }
        a {
            text-decoration: 0;
            color: white;
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-4 col-lg-8 col-xl-9">
                    <div class="card bg-secondary text-white" style="border-radius: 1rem;">
                        <div class="card-body p-4">

                            <div class="mb-md-4 mt-md-3 pb-2">

                                <h1 style="text-align :center ; color: orange; padding-bottom:10px;">
                                    <p> <u> <strong>Modifier une question</strong> </u> </p>
                                </h1>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3 mt-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">
                                                <h4>Nom de la question</h4>
                                            </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 mt-3">
                                            <label for="exampleFormControlTextarea2 form-group col-md-6 mb-3"
                                                class="form-label">
                                                <h4>Description de la question</h4>
                                            </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3 mt-3">
                                            <label for="formFile" class="form-label">
                                                <h4>Image de la question</h4>
                                            </label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 mt-3">
                                            <label for="formFileMultiple" class="form-label">
                                                <h4>Video de la question</h4>
                                            </label>
                                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3 mt-3">
                                            <label for="exampleFormControlTextarea3 form-group col-md-6 mb-3"
                                                class="form-label">
                                                <h4>Categorie de la question</h4>
                                            </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 mt-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">
                                                <h4>Solution à la question</h4>
                                            </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3 mt-3">
                                            <button type="button" class="btn btn-lg rounded-pill btn-primary"
                                                style="width: 450px ; color: black;"><a href="{{ url('questions/list_question') }}">Annuler</a></button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 mt-3">
                                            <button type="submit" class="btn btn-lg rounded-pill"
                                                style="width: 450px ; color: black;background-color:orange">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</body>

</html>
