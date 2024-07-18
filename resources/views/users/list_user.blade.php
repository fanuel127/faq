<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <style>
        body { background-color: white;}
        a { color:black;text-decoration: 0; }
        .panel {position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);
            width: 600px;background-color: #fff;box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transition:width 0.3s ease-in-out, opacity 0.3s ease-in-out; opacity:0; pointer-events:none;z-index: 1000;}
        .panel.open {width: 600px; opacity: 1; pointer-events: auto;}
        .panel-header {display: flex;justify-content: space-between;align-items: center;padding: 1rem;background-color: #f1f1f1;}
        .panel-body {padding: 1rem;}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color:orange;text-align:center;margin-top:25px;padding-bottom:12px;"> <p> <u>Listes des utilisateurs</u> </p> </h1>
                <table class="table table-striped table-hover align-middle">
                        <thead class="bg-dark">
                          <tr>
                            <th scope="col"> <h3>Id</h3> </th>
                            <th scope="col"> <h3>Prenom</h3> </th>
                            <th scope="col"> <h3>Nom</h3> </th>
                            <th scope="col"> <h3>Genre</h3> </th>
                            <th scope="col"> <h3>Adresse Email</h3> </th>
                            <th scope="col"> <h3>Mot de passe</h3> </th>
                            <th scope="col"> <h3>Numero</h3> </th>
                            <th scope="col"> <h3>Status</h3> </th>
                            <th scope="col" colspan="3"> <h3>Actions</h3> </th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-success">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-success">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-success">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-success">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-success">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-success">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-success">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-secondary">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-success">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Masculin</td>
                            <td>ken@gmail.com</td>
                            <td>7532159</td>
                            <td>111111111</td>
                            <td> <button id="myButton" class="btn btn-success">Activer</button> </td>
                            <td> <a href="edit_user.blade.php"> <button class="btn btn-warning">modifier</button> </a> </td>
                            <td> <button id="open-panel-btn" class="btn btn-info">details</button> </td>
                            <td>
                              <div class="form-check form-switch">
                                <label class="switch"><input class="form-check-input" type="checkbox" role="switch" id="mySwitch"><span class="slider round"></span></label>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                <div id="user-info-panel" class="panel">
                    <div class="panel-header">
                        <h3>Informations</h3>
                        <button id="close-panel-btn" class="btn btn-warning">
                            Fermer
                        </button>
                    </div>
                    <div class="panel-body">
                        <p>Prenom : </p> <br>
                        <p>Nom : </p> <br>
                        <p>Genre : </p> <br>
                        <p>Adresse Email : </p> <br>
                        <p>Mot de passe : </p> <br>
                        <p>Numero de telephone : </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded' , function() {
            var panel = document.getElementById('user-info-panel');
            var openBtns = document.querySelectorAll('#open-panel-btn');
            var closeBtn = document.getElementById('close-panel-btn');

            openBtns.forEach(function(btn) {
                btn.addEventListener('click' , function() {
                    panel.classList.add('open');
                });
            }) ;

            closeBtn.addEventListener('click' , function() {
                panel.classList.remove('open');
            }) ;

        });
    </script>
    <script>
        const mySwitches = document.querySelectorAll('.switch input');
        const myButtons = document.querySelectorAll('#myButton');

        mySwitches.forEach( (mySwitch,index) => {
          mySwitch.addEventListener('change', function() {
            if (this.checked) {
              myButtons[index].textContent = 'Activer';
              myButtons[index].classList.remove('btn-danger');
              myButtons[index].classList.add('btn-success');
            }
            else {
              myButtons[index].textContent = 'Desactiver' ;
              myButtons[index].classList.remove('btn-success');
              myButtons[index].classList.add('btn-danger');
            }
          });
        });
    </script>
</body>
</html>
