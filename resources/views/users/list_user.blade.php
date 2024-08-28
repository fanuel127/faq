@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="ms-3">Gestions des utilisateurs</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                <li class="breadcrumb-item">Utilisateur</li>
                <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
            </ol>
        </nav>

    </div>
    <div class="container-fluid mt-2 py-4">
        <div class="row">
            <div class="col-12">

                <div class="card" id="mybutton">
                    <div class="card-header bg-secondary">
                        <div class="card-title">
                            <div class="d-flex justify-content-between ">
                                <h4 class="text-center text-light  pt-3">
                                    <i class="bi bi-list-ul text-warning me-2"></i>Liste des utilisateurs
                                </h4>
                                <a href="{{ url('/users/add_user') }}" id="mybutton"
                                    class="btn btn-warning pt-2 mt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                    Ajouter
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/users/filter') }}" method="GET">

                            <div class="filter-bar d-flex justify-content-between bg-light " id="filter-bar"
                                style="padding-top: 10px; padding-bottom:10px; border-raduis:0;">
                                <div class="order ">
                                    <label for="myinputs">Trie par ordre..</label>
                                    <select class="filtered" name="order" id="myinputs">
                                        <option value="" selected desabled>--</option>
                                        <option value="asc">Croissant</option>
                                        <option value="desc">Decroissant</option>
                                    </select>
                                </div>
                                <div class="sort ">
                                    <label for="myinputs">De..</label>
                                    <select class="filtered" name="sort" id="myinputs">
                                        <option value="" selected>--</option>
                                        <option value="firstName">Nom</option>
                                        <option value="lastName">Prenom</option>
                                    </select>
                                </div>
                                <div class="gender ">
                                    <label for="myinputs">Genre..</label>
                                    <select class="filtered" name="gender" id="myinputs">
                                        <option value="" selected>--</option>
                                        <option value="masculin">Masculin</option>
                                        <option value="feminin">Feminin</option>
                                    </select>
                                </div>
                                <div class="status ">
                                    <label for="myinputs">Statut..</label>
                                    <select class="filtered" name="status" id="myinputs">
                                        <option value="" selected>--</option>
                                        <option value="1">Actif</option>
                                        <option value="0">Inactif</option>
                                    </select>
                                </div>
                                <div class="role ">
                                    <label for="myinputs">Role..</label>
                                    <select class="filtered" name="role" id="myinputs">
                                        <option value="" selected>--</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->role_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="search filter-bar d-flex justify-content-end bg-light rounded-0 mt-2 ">
                            <form class="search-form d-flex" action="/search_user" method="GET">
                                <div class="input-group">
                                    <input class="search-input filtered" type="search" id="myinpu" name="search"
                                        placeholder="Recherche..." aria-label="Search"
                                        value="{{ isset($search) ? $search : '' }}">
                                    <button type="submit" class="btn btn-primary" id="myinpu" style="width: 10vh;"><i
                                            class="bi bi-search text-white"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <table id="example" class="table table-striped table-hover text-center" style="width:100%">
                            <thead class="table-dark">
                                <tr class="">
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Genre</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Role</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($users as $user)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $user->firstName }}</td>
                                        <td>{{ $user->lastName }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phoneNumber }}</td>
                                        <td>{{ $user->role->role_name }}</td>
                                        <td>
                                            @if ($user->status == 0)
                                                <span class="badge rounded-0 bg-danger">Désactivé</span>
                                            @else
                                                <span class="badge rounded-0 bg-success">Activé</span>
                                            @endif
                                        </td>
                                        <td class="d-flex justify-content-center ">
                                            <a href="{{ url('/users/update/' . $user->id) }}" id="mybutton"
                                                title="Modifier" class="btn btn-warning">
                                                <i class="fas fa-edit btn-sm text-white"></i>
                                            </a>
                                            <form method="POST">
                                                <a class="btn btn-primary mx-2" id="mybutton" title="Voir plus"
                                                    href="{{ url('/users/show_user/' . $user->id) }}"style="text-decoration: 0;color:black;">
                                                    <i class="fas fa-eye btn-sm text-white"></i>
                                                </a>
                                            </form>

                                            @if ($user->status == 1)
                                                <a href="{{ route('status', $user->id) }}" class="btn btn-danger btn-sm"
                                                    id="span">Désactivé</a>
                                            @else
                                                <a href="{{ route('status', $user->id) }}" class="btn btn-success"
                                                    id="span">Activé</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end">
                            {{ $users->links() }}
                        </div>
                        {{-- <div id="results"></div>

                            <script>
                                $(document).ready(function() {
                                    function fetchResults(query, page = 1) {
                                        $.ajax({
                                            url: '{{ url('users/list_user') }}',
                                            type: 'GET',
                                            data: {
                                                query: query,
                                                page: page
                                            },
                                            success: function(data) {
                                                $('#results').empty();
                                                data.data.forEach(function(item) {
                                                    $('#results').append('<p>' + item.firstName + '</p>');
                                                });

                                                $('#pagination').empty();
                                                if (data.links) {
                                                    data.links.forEach(function(link) {
                                                        if (link.url) {
                                                            $('#pagination').append(
                                                                '<button class="page-link" data-page="' + link.url
                                                                .split('page=')[1] + '">' + link.label + '</button>'
                                                            );
                                                        } else {
                                                            $('#pagination').append('<span>' + link.label + '</span>');
                                                        }
                                                    });
                                                }
                                            }
                                        });
                                    }

                                    $('#myinpu').on('input', function() {
                                        var query = $(this).val();
                                        fetchResults(query);
                                    });

                                    $(document).on('click', '.page-link', function() {
                                        var page = $(this).data('page');
                                        var query = $('#myinpu').val();
                                        fetchResults(query, page);
                                    });
                                });
                            </script> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
