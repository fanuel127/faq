<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Questions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <style>
        table { border: 3px solid brown; }
        td,th,tr { border: 3px solid brown; }
        body { background-color: black ; color: whitesmoke ; }
    </style>

</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="table-responsive col-12">
            <table class="table table-bordered table-stiped table-success table-hover" id="crudTable">
                <caption class="caption-top" style="font-size: 60px ; text-align:center ; color:aqua">
                    <p> <u>Tableaux Des Questions Ajoutés</u> </p>
                </caption>
                <br>
                <thead>
                    <tr>
                        <th>Question Name</th>
                        <th>Question Description</th>
                        <th>QuestionCategory </th>
                        <th>Image For The Question</th>
                        <th>Video For The Question</th>
                        <th>Solution To The Question</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td> <img src="{{ asset('image/image1.png') }}" style="height: 180px ; width:340px"> </td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                    </tr>
                    <tr>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td> <img src="{{ asset('image/image1.png') }}" style="height: 180px ; width:340px"> </td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                    </tr>
                    <tr>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td> <img src="{{ asset('image/image1.png') }}" style="height: 180px ; width:340px"> </td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                        <td>Listes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions AjoutésListes Des Questions Ajoutés</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <footer>
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
    </footer>
</body>
</html>