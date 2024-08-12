<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>

    <style>
        /* add_user css */
        a {
            text-decoration: 0;
            color: whitesmoke;
            border: none;
            border-radius: 0;
            font-weight: bold;
        }

        #filter-bar , #span {
            border-radius: 0;
        }

        #myinputs {
            font-size: 22px;
            border-radius: 0;
            height: 50px;
        }

        #myinpu {
            font-size: 22px;
            border-radius: 0;
            height: 50px;
        }

        .btn {
            border-radius: 0px;
        }

        #showdeplace {
            margin-left: 20%;
        }

        .vertical-line {
            border-left: 8px solid orange;
            height: 80%;
            position: absolute;
            left: 10%;
            transform: translateX(-50%);
        }

        #pagination {
            margin-left: 90%;
            border-radius: 0;
        }


        /* input , select {
            width: 800px;
        } */

        /*list_user css*/

        body {
            font-size: 16px;
            background-color: rgba(44, 31, 31, 0.349);
        }

        .card {
            border-radius: 0;
            height: 80vh;
        }

        #bord {
            border: none;
        }

        #lien {
            text-decoration: 0;
            color: black;
        }
        #liens {
            text-decoration: 0;
            color: whitesmoke;
        }

        /* show_user css */

        th {
            font-size: 18px;
        }

        .filtered {
            border-radius: 0;
            outline: none;
            padding-left: 20px;
            height: 45px;
            border: solid 1px rgb(45, 84, 97)
        }

        button {
            font-weight: bold;
            font-size: 22px;
            width: 400px;
            height: 70px;
            border-radius: 0;
        }

        .btn {
            border-radius: 0;
        }

        .filter-bar {
            /* box-shadow: 0 0 3px rgb(40, 39, 39); */
            border-radius: 0;
            padding: 8px;
            margin-bottom: 10px;
        }

        .search-button {
            margin-right: 90px;
        }

        .search-input {
            margin-left: 0px;
            width: 350px;
        }

        /* .search-form{
            padding-left: 60px;
            outline: none;
            padding-right: -60px;
        } */

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }

        /* Sidebar styles */
        /* .sidebar {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #f1f1f1;
      overflow-x: hidden;
      padding-top: 20px;
        } */

        .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            /* color: #818181; */
            display: block;
        }

        .sidebar a:hover {
            color: #000;
        }

        #myinput {
            font-size: 22px;
            border-radius: 0;
            height: 70px;
        }

        #mybutton {
            border-radius: 0;

        }
    </style>

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('admin/bootstrap-5.3.3-dist/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <div class="d-flex" id="wrapper">

        <div id="sidebar-wrapper">
            @include('layouts.partials.sidebar')
        </div>

        <div id="page-content-wrapper">

            @include('layouts.partials.navbar')

            <div class="container-fluid px-4">
                @yield('content')
            </div>

        </div>
    </div>
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/datatables.min.js') }}"></script>
    <script src={{ asset('admin/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}></script>
    <script src="{{ asset('admin/jquery-3.7.1.js') }}"></script>
</body>

</html>

</body>

</html>
