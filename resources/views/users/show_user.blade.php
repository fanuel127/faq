<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Details_User</title>

    <style>
        table tr td {
            vertical-align: middle;
        }

        td button {
            margin: 5px;
        }

        td button {
            font-size: 20px;
        }

        .modal-header {
            background: orange;
            color: black;
        }

        .modal-body form {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 0;
        }

        .modal-body form .imgholder {
            /* flex-basis: 32% ;
            height: 100%; */
            width: 200px;
            height: 200px;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }

        .imgholder .upload {
            position: absolute;
            bottom: 0;
            left: 10;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: none;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .upload i {
            color: #fff;
            font-size: 35px;
        }

        .imgholder .upload input {
            display: none;
        }

        .imgholder:hover .upload {
            display: flex;
        }

        .modal-body form .inputField {
            flex-basis: 68%;
            border-left: 5px groove orange;
            padding-left: 20px;
        }

        form .inputField>div {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        form .inputField>div label {
            font-size: 20px;
            font-weight: 500;
        }

        #userForm form .inputField>div label::after {
            content: "*";
            color: red;
        }

        form .inputField>div input {
            width: 75%;
            padding: 10px;
            border: none;
            outline: none;
            background: transparent;
            border-bottom: 2px solid orange;
        }

        .modal-footer .submit {
            font-size: 18px;
        }

        #readData form .inputField>div input {
            color: #000;
            font-size: 18px;
        }
    </style>

</head>

<body>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#readData" style="margin-left: 28%; margin-top:28%"><i
        class="bi bi-eye"></i></button>

    <div class="modal fade" id="readData">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="#" id="myForm">

                        <div class="card imgholder">
                            <img src="{{ asset('image/user.png') }}" width="200" height="200">
                        </div>

                        <div class="inputField">
                            <div>
                                <label for="name">Nom</label>
                                <input type="text" name="" id="name" disabled>
                            </div>
                            <div>
                                <label for="prenom">Prenom</label>
                                <input type="text" name="" id="prenom" disabled>
                            </div>
                            <div>
                                <label for="genre">Genre</label>
                                <input type="text" name="" id="genre" disabled>
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="" id="email" disabled>
                            </div>
                            <div>
                                <label for="phone">Telephone</label>
                                <input type="text" name="" id="phone" minlength="11" maxlength="11"
                                    disabled>
                            </div>
                            <div>
                                <label for="status">Status</label>
                                <input type="text" name="" id="status" disabled>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        var form = document.getElementById("myForm"),
            imgInput = document.querySelector(".img"),
            file = document.getElementById("imgInput"),
            name = document.getElementById("name"),
            prenom = document.getElementById("prenom"),
            genre = document.getElementById("genre"),
            email = document.getElementById("email"),
            phone = document.getElementById("phone"),
            status = document.getElementById("status"),
            submitBtn = document.querySelector(".submit"),
            userINfo = document.getElementById("data")

        let getData = localStorage.getItem('userProfile') ? JSON.parse(localStorage.getItem('userProfile')) : []

        let isData = false,
            editId

        file.onchange = function() {
            if (file.files[0].size < 3000000) { // 3MB = 3000000
                var fileReader = new FileReader();

                fileReader.onload = function(e) {
                    imgUrl = e.target.result
                    imgInput.src = imgUrl
                }

                fileReader.readAsDataUrl(file.files[0])
            } else {
                alert("ce fichier est trop volumineux!")
            }
        }
    </script>

</body>

</html>

