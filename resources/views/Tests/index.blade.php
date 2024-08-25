<!DOCTYPE htsm>
<htsm lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>list</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOsmASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">    </head>
    <style>
        body {
            /* font-size: 10px; */
            /* background-color:  rgb(177, 199, 212); */
            background-color: white;
        }

        .card {
            font-size: 13px;
            border-radius: 0px;


        }

        .table {
            font-size: 13px;
        }
        .btn{
            border-radius: 0px;
        }
        .badge{
            border-radius: 0px;

        }

         /* a {
            border-radius: none;
        } */
        #myinputs {
            font-size: 17px;
            box-shadow: 0px;

        }
        .badge{
            border-radius: 0px;

        }
        .badge{
            border-radius: 0px;

        }

        select option {
            font-size: 14px;
        }


        .card-body {
            background-color: whitesmoke;
            border: none;

        }

        .card-header {
            background-color: lightslategray;
            color: white;

        }

         /* .filter {
            font-size: 15px;

        } */

        /* .card{
        margin-left: 400px;
    } */
    </style>

    <body>
        <div class="container-fluid p-3 ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-4 text-center">
                        <div class="card-header text-center ">
                            <div class="card-title d-flex justify-content-between">
                                <h5><i class="bi bi-list-ul me-2"></i>Users Lists</h5>
                                <a href="{{ url('/test/create') }}" class="btn btn-warning btn-sm" title="add a user">
                                    <i class="bi bi-plus"></i>
                                    Add
                                </a>
                            </div>
                        </div>

                        <div class="card-body ">
                            <div class="filter-bar d-flex justify-content-between bg-light mt-1 mb-2" id="filter-bar">
                                <div class="order mt-3 mb-3">
                                    <label for="sort">Sort by..</label>
                                    <select class="filter" id="myinputs">
                                        <option value="" selected desabled>--</option>
                                        <option value="asc">ascending order</option>
                                        <option value="desc">descending order </option>
                                    </select>
                                </div>
                                <div class="sort mt-3 mb-3">
                                    <label for="">Of..</label>
                                    <select class="filter" name="sort" id="myinputs">
                                        <option value="" selected desabled>--</option>
                                        <option value="firstname">FirstName</option>
                                        <option value="lastname">LastName</option>
                                        <option value="email">Email</option>
                                    </select>
                                </div>
                                <div class="gender mt-3 mb-3">
                                    <label for="">Gender..</label>
                                    <select class="filter" name="gender" id="myinputs">
                                        <option value="" selected desabled>--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="status mt-3 mb-3">
                                    <label for="status">Status..</label>
                                    <select class="filter" name="status" id="myinputs">
                                        <option value="" selected desabled>--</option>
                                        <option value="male">Enable</option>
                                        <option value="female">Disable</option>
                                    </select>
                                </div>
                                <div class="search mt-3 mb-3">
                                    {{-- <input class="form-control search-input filtered" type="search" placeholder="Taper.." aria-label="Search">
                        <button class="btn btn-outline-success filtered" type="submit">Search</button> --}}
                                    <input class="filter" type="search" id="myinputs" name="search"
                                        placeholder="Search...">
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead class="table-dark ">
                                    <tr>
                                        <th>#</th>
                                        <th>LastName</th>
                                        <th>FirstName</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>samira </td>
                                        <td> kamsou </td>
                                        <td> female </td>
                                        <td> samira@gmail.com </td>
                                        <td> 67898565 </td>
                                        <td> <span class="badge text-bg-danger">disable</span>
                                        </td>
                                        <td class="d-flex  ">
                                            <a href="{{ url('/test/edit') }}" class="btn btn-warning btn-sm "
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/test/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>samira </td>
                                        <td> kamsou </td>
                                        <td> female </td>
                                        <td> samira@gmail.com </td>
                                        <td> 67898565 </td>
                                        <td> <span class="badge text-bg-success">enable</span>
                                        </td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/test/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/test/show') }}" class="btn btn-info btn-sm mx-2 "
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>vincent </td>
                                        <td> kamsou </td>
                                        <td> male </td>
                                        <td> vincent@gmail.com </td>
                                        <td> 6780903 </td>
                                        <td> <span class="badge text-bg-success">enable</span>
                                        </td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/test/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/test/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>samira </td>
                                        <td> kamsou </td>
                                        <td> female </td>
                                        <td> samira@gmail.com </td>
                                        <td> 67898565 </td>
                                        <td> <span class="badge text-bg-danger">disable</span>
                                        </td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/test/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/test/show') }}" class="btn btn-info btn-sm mx-2 "
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>

                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>samira </td>
                                        <td> kamsou </td>
                                        <td> female </td>
                                        <td> samira@gmail.com </td>
                                        <td> 67898565 </td>
                                        <td> <span class="badge text-bg-success">enable</span>
                                        </td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/test/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/test/show') }}" class="btn btn-info btn-sm  mx-2"
                                                title="show"><i class="fa fa-eye"></i>
                                            </a>

                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>arnord </td>
                                        <td> Tammo </td>
                                        <td> male </td>
                                        <td> arnord@gmail.com </td>
                                        <td> 67898565 </td>
                                        <td> <span class="badge text-bg-success">enable</span>
                                        </td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/test/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/test/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>samira </td>
                                        <td> kamsou </td>
                                        <td> female </td>
                                        <td> samira@gmail.com </td>
                                        <td> 67898565 </td>
                                        <td> <span class="badge text-bg-success">enable</span>
                                        </td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/test/edit') }}" class="btn btn-warning btn-sm"
                                                title="Modify">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <a href="{{ url('/test/show') }}" class="btn btn-info btn-sm mx-2"
                                                title="show"><i class="fa fa-eye"></i>

                                            </a>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                            </div>
                                        </td>
                                    </tr>


                                </tbody>


                            </table>
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </body>

</htsm>
