<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add_User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: white;
        }

        input,
        select {
            height: 60px;
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-5 col-lg-12 col-xl-8">
                    <div class="card bg-secondary text-white" style="border-radius: 1rem;">
                        <form action="{{ URL('users.store') }}">
                            @csrf
                            <div class="card-body px-4">

                        <div class="mb-md-5 mt-md-4 pb-2">

                          <h2 class="fw-bold mb-4 text-uppercase" style="border-radius: 25%; color: orange"> <p> <u>Ajouter un Utilisateur</u> </p> </h2>

                          <div class="mb-3 mt-3">
                              <label for="exampleFormControlInput" class="form-label"> <h5>Prénom</h5> </label>
                              <input type="text" name="lastName" class="form-control" name="lastName" id="exampleFormControlInput">
                          </div>

                          <div class="mb-3 mt-3">
                              <label for="exampleFormControlInput1" class="form-label"> <h5>Nom</h5> </label>
                              <input type="text" name="firstName" class="form-control" id="exampleFormControlInput1">
                          </div>

                          <div>
                              <label for="floatingSelect"> <h5>Genre</h5> </label>
                              <select class="form-select" name="gender" id="floatingSelect">
                                <option value="masculin">Masculin</option>
                                <option value="féminin">Féminin</option>
                              </select>
                          </div>
                          {{-- <div>
                            <label for="floatingSelect"> <h5>Role</h5> </label>
                            <select class="form-select" name="role_id" id="floatingSelect">
                                @foreach ($roles as $role )
                                    <option value={{ $role->value }}>{{ $role->role_name }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                          <div class="mb-3">
                              <label for="exampleFormControlInput2" class="form-label"> <h5>Adresse Email</h5> </label>
                              <input type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                          </div>

                          <div class="mb-3">
                              <label for="exampleFormControlInput3" class="form-label"> <h5>Mot de passe</h5> </label>
                              <input type="password" name="password" class="form-control" id="exampleFormControlInput3" >
                          </div>

                          <div class="mb-3">
                              <label for="exampleFormControlInput3" class="form-label"> <h5>Confirmation mot de passe</h5> </label>
                              <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlInput3" >
                          </div>
                          <div class="mb-3">
                              <label for="email" class="form-label"> <h5>Confirmation mot de passe</h5> </label>
                              <input type="email" name="email" class="form-control" id="email" >
                          </div>

                          <div class="mb-3">
                              <label for="exampleFormControlInput4" class="form-label"> <h5>Téléphone</h5> </label>
                              <input type="text" name="phoneNumber" class="form-control" id="exampleFormControlInput4">
                          </div>

                          <div class="mb-3">
                              <button type="submit" class="btn btn-lg rounded-pill" style="width: 200px ; color: black;background-color:orange">Enregistrer</button>
                          </div>

                      </div>
                </form>
              </div>
                                <div class="mb-md-8 mt-md-4 pb-2">

                                    <h2 class="fw-bold mb-4 text-uppercase" style="border-radius: 25%; color: orange">
                                        <p> <u>Ajouter un Utilisateur</u> </p>
                                    </h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <label for="exampleFormControlInput1" class="form-label">
                                                    <h5>Nom</h5>
                                                </label>
                                                <input type="text" name="firstName" class="form-control"
                                                    id="exampleFormControlInput1">
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <label for="floatingSelect">
                                                    <h5>Genre</h5>
                                                </label>
                                                <select class="form-select" name="gender" id="floatingSelect">
                                                    <option value="masculin">Masculin</option>
                                                    <option value="féminin">Féminin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <label for="exampleFormControlInput1" class="form-label">
                                                    <h5>Prenom</h5>
                                                </label>
                                                <input type="text" name="lastName" class="form-control"
                                                    id="exampleFormControlInput1">
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <div>
                                                    <label for="floatingSelect">
                                                        <h5>Role</h5>
                                                    </label>
                                                    <select class="form-select" name="role_id" id="floatingSelect">
                                                        {{-- @foreach ($roles as $role)
                                                        <option value="{{ $role->value }}" class="form-control">{{ $role->role_name }}</option>
                                                        @endforeach --}}
                                                        <option value="1">Admin</option>
                                                        <option value="2">SimpleUser</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <label for="exampleFormControlInput3" class="form-label">
                                                    <h5>Mot de passe</h5>
                                                </label>
                                                <input type="password" name="password" class="form-control"
                                                    id="exampleFormControlInput3">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">
                                                    <h5>Téléphone</h5>
                                                </label>
                                                <input type="text" name="phoneNumber" class="form-control"
                                                    id="exampleFormControlInput4">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <label for="exampleFormControlInput3" class="form-label">
                                                    <h5>Confirmation mot de passe</h5>
                                                </label>
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    id="exampleFormControlInput3">
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <label for="exampleFormControlInput2" class="form-label">
                                                    <h5>Adresse Email</h5>
                                                </label>
                                                <input type="email" name="email" class="form-control"
                                                    id="exampleFormControlInput2" placeholder="name@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <button type="submit" class="btn btn-lg rounded-pill btn-primary"
                                                   style="width: 400px ;" >Annuler</button>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 mt-3">
                                                <button type="submit" class="btn btn-lg rounded-pill"
                                                    style="width: 400px ; color: black;background-color:orange">Enregistrer</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
