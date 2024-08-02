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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" />

    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <style>
        /* add_user css */
        a {
            text-decoration: 0;
        }

        input,
        select,
        button {
            height: 60px;
        }

        /* edit_user css*/

        input,
        select,
        button {
            height: 60px;
        }

        /* input , select {
            width: 800px;
        } */

        /*list_user css*/

        body {
            font-size: 16px;
        }

        /* show_user css */
        p,
        th {
            font-size: 18px;
        }

        .filtered {
            border-radius: 5px;
            outline: none;
            padding: 1px;
            height: 30px;
            border: solid 1px rgb(45, 84, 97)
        }

        button {
            margin-left: 20%;
        }

        .filter-bar {
            box-shadow: 0 0 3px rgb(40, 39, 39);
            border-radius: 4px;
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
    </style>
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/datatables.min.css') }}">
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/datatables.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/2.1.2/dataTables.bootstrap5.min.js"
        integrity="sha512-Cwi0jz7fz7mrX990DlJ1+rmiH/D9/rjfOoEex8C9qrPRDDqwMPdWV7pJFKzhM10gAAPlufZcWhfMuPN699Ej0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
