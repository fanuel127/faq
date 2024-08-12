@extends('layouts.admin')

@section('content')
    <div style="display:flex; justify-content:space-between;margin: 30px;">
        <h4>Gestions des utilisateurs</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></li>
                <li class="breadcrumb-item">Utilisateur</li>
                <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
            </ol>
        </nav>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                {{-- <form action="{{ route('users.total') }}" method="GET"
                        style="display:flex; justify-content:space-between;">
                        <div class="form-group">
                            <label for="sort">Trier par :</label>
                            <select name="sort" id="sort" class="form-control" style="width: 180px;">
                                <option value="">Sélectionner un tri</option>
                                <option value="asc">Ordre croissant</option>
                                <option value="desc">Ordre décroissant</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 150px;">Classer</button>
                    </form> --}}


                <div class="card" id="mybutton">
                    <div class="card-header bg-secondary">
                        <div class="card-title">
                            <div class="d-flex justify-content-between ">
                                <h4 class="text-center text-light  pt-3"><i
                                        class="bi bi-list-ul text-warning me-2"></i>Liste des utilisateurs</h4>
                                <a href="{{ url('/users/add_user') }}" id="mybutton"
                                    class="btn btn-warning pt-2 mt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                    Ajouter
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.total') }}" method="GET">
                            <div class="filter-bar d-flex justify-content-between bg-light mt-3 mb-4" id="filter-bar"
                                style="padding-top: 10px; padding-bottom:10px; border-raduis:0;">
                                <div class="order mt-3 mb-3">
                                    <label for="myinputs">Trie par..</label>
                                    <select class="filtered" name="sort" id="myinputs">
                                        <option value="" selected desabled>--</option>
                                        <option value="asc">Ordre croissant</option>
                                        <option value="desc">Ordre decroissant</option>
                                    </select>
                                </div>
                                <div class="sort mt-3 mb-3">
                                    <label for="myinputs">De..</label>
                                    <select class="filtered" name="sort" id="myinputs">
                                        <option value="" selected desabled>--</option>
                                        <option value="firstname">Nom</option>
                                        <option value="lastname">Prenom</option>
                                        <option value="email">Email</option>
                                    </select>
                                </div>
                                <div class="gender mt-3 mb-3">
                                    <label for="myinputs">Genre..</label>
                                    <select class="filtered" name="gender" id="myinputs">
                                        <option value="" selected desabled>--</option>
                                        <option value="male">Masculin</option>
                                        <option value="female">Feminin</option>
                                    </select>
                                </div>
                                <div class="status mt-3 mb-3">
                                    <label for="myinputs">Statut..</label>
                                    <select class="filtered" name="status" id="myinputs">
                                        <option value="" selected desabled>--</option>
                                        <option value="male">Actif</option>
                                        <option value="female">Inactif</option>
                                    </select>
                                </div>
                                <div class="search mt-3 mb-3">
                                    {{-- <input class="form-control search-input filtered" type="search" placeholder="Taper.." aria-label="Search">
                                <button class="btn btn-outline-success filtered" type="submit">Search</button> --}}
                                    <form class="search-form d-flex" action="{{ route('users.total') }}" method="GET">
                                        <input class=" search-input filtered" type="search" id="myinpu" name="search"
                                            placeholder="Recherche..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </form>
                        <div>
                            <table id="example" class="table text-center" style="width:100%">
                                <thead class="table-dark">
                                    <tr class="">
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Genre</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Statut</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($users as $user)
                                        @php
                                            $i++;
                                        @endphp
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $user->firstName }}</td>
                                        <td>{{ $user->lastName }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phoneNumber }}</td>
                                        {{-- <td>
                                            <a href="{{ $user->i }}" class="btn btn-sm btn-{{ $user->status ? 'danger' : 'success' }}">
                                                {{ $user->status ? 'Desactive' : 'Active' }}
                                            </a>
                                        </td> --}}
                                        <td>
                                            @if ($user->status == 1)
                                                <span class="btn btn-success" id="span">Activé</span>
                                            @else
                                                <span class="btn btn-danger" id="span">Désactivé</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->role_id === 1 ? 'Admin' : 'Gestionnaire' }}</td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/users/update/' . $user->id) }}" id="mybutton"
                                                title="Modifier" class="btn btn-warning">
                                                <i class="fas fa-edit " style="color: whitesmoke;"></i>
                                            </a>
                                            <form method="POST">
                                                <a class="btn btn-primary mx-3" id="mybutton" title="Voir plus"
                                                    href="{{ url('/users/show_user/' . $user->id) }}"style="text-decoration: 0;color:black;">
                                                    <i class="fas fa-eye" style="color: whitesmoke;"></i>
                                                </a>
                                            </form>
                                            {{-- <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked">
                                            </div> --}}


                                            @if ($user->status == 1)
                                                <a href="{{ route('status', $user->id) }}" class="btn btn-danger"
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
                            <div id="pagination">
                                {{-- {{ $users->links() }} --}}
                            </div>
                            {{-- <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
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
                              </nav> --}}
                            <div id="results"></div>

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
                            </script>
                            </body>

                            </html>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- </body>

</html> --}}
{{-- <button id="myButton" class="btn btn-sm btn-success switch-button">Activer</button> --}}
