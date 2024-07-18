<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter une question</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <style>
        body {
            background-color:white;
            color: black;
        }
        input , textarea { height: 45px ;}
    </style>
</head>
<body>
    <!-- <div class="container py-3">
        <div class="row justify-content-center">
            <form action=""  class="col-md-8" >
                <h1 style="text-align :center"> <strong>Question Management</strong> </h1>
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
                    <button type="button" class="btn btn-lg rounded-pill" style="width: 600px ; height: 60px ; margin-left: 15% ; background-color:black ; color: white">Create_Question</button>
                </div>
            </form>
            <div class="col-md-12 py-5">
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
            </div>
        </div>
    </div> -->
    <h2> <u>NB : </u>Les champs à remplir contenant un Asterix(*) sont obligatoires pour pouvoir ajouter un utilisateur</h2>

    <section class="vh-100 gradient-custom">
        <div class="container py-1 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-4 col-lg-8 col-xl-7">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-1">

                  <div class="mb-md-2 mt-md-3 pb-2">

                    <!-- <h2 class="fw-bold mb-4 text-uppercase" style="border-radius: 25%; color: orange"> <p> <u>Ajouter un Utilisateur</u> </p> </h2>

                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1" class="form-label"> <h5>Prénom</h5> </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1" class="form-label"> <h5>Nom</h5> </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div>
                        <label for="floatingSelect"> <h5>Genre</h5> </label>
                        <select class="form-select" id="floatingSelect">
                          <option value="1">Masculin</option>
                          <option value="2">Féminin</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label"> <h5>Adresse Email</h5> </label>
                        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label"> <h5>Mot de passe</h5> </label>
                        <input type="password" class="form-control" id="exampleFormControlInput3" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label"> <h5>Confirmation mot de passe</h5> </label>
                        <input type="password" class="form-control" id="exampleFormControlInput3" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label"> <h5>Numéro de téléphone</h5> </label>
                        <input type="text" class="form-control" id="exampleFormControlInput4">
                    </div>

                    <div class="mb-3">
                        <button type="button" class="btn btn-lg rounded-pill" style="width: 200px ; color: black;background-color:orange">Enregistrer</button>
                    </div> -->

                    <h1 style="text-align :center ; color: orange;"> <p> <u> <strong>Ajouter une question</strong> </u> </p> </h1>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> <h4>Nom de la question<span class="text-danger">*</span></h4> </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea2 form-group col-md-6 mb-3" class="form-label"> <h4>Description de la question<span class="text-danger">*</span></h4> </label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea3 form-group col-md-6 mb-3" class="form-label"> <h4>Categorie de la question<span class="text-danger">*</span></h4> </label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label"> <h4>Image de la question<span class="text-danger">*</span></h4> </label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label"> <h4>Video de la question</h4> </label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> <h4>Solution à la question<span class="text-danger">*</span></h4> </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <br>
                <div class="mb-3">
                    <button type="button" class="btn btn-lg rounded-pill" style="width: 200px ; color: black;background-color:orange">Enregistrer</button>
                </div>

                   </div>
                </div>
            </div>
          </div>
        </div>
      </section>

</body>
</html>

