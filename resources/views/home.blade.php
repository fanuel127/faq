@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
            </div>
        </div>

        <hr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter User</title>
    <style>
        body {
            background-color: rgb(75, 116, 112);
            color: rgb(14, 212, 77);
        }
        input { height: 55px ;}
    </style>
</head>
<body>
    <h1 style="text-transform: uppercase ; text-align:center ; color:rgb(255, 115, 0)">Insert User</h1>
    <form action=""  class="col-md-8" >
        <div class="mb-3 mt-5">
            <label for="exampleFormControlInput1" class="form-label"> <h4>First_Name</h4> </label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3 mt-3">
            <label for="exampleFormControlInput1" class="form-label"> <h4>Last_Name</h4> </label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label"> <h4>Email address</h4> </label>
            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label"> <h4>Password</h4> </label>
            <input type="password" class="form-control" id="exampleFormControlInput3" >
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput4" class="form-label"> <h4>Phone Number</h4> </label>
            <input type="text" class="form-control" id="exampleFormControlInput4">
        </div>

        <br>
        <div class="mb-3">
            <button type="button" class="btn btn-success btn-lg rounded-pill" style="width: 200px">Add User</button>
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
</body>
</html>
@endsection
