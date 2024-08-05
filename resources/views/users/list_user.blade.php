@extends('layouts.admin')

@section('content')
    <div style="display:flex; justify-content:space-between;margin: 30px;">
        <h4>Gestions des utilisateurs</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" style="color: black;">Accueil</a></li>
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


                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="d-flex justify-content-between ">
                                <h4 class="text-center"><i class="bi bi-list-ul me-2"></i>Liste des utilisateurs</h4>
                                <a href="{{ url('/users/add_user') }}" class="btn btn-warning"
                                    title="Ajouter un nouveau utilisateur">
                                    <i class="fas fa-plus"></i>
                                    Ajouter
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="filter-bar d-flex justify-content-between bg-light">
                            <div class="order">
                                <label for="order">Trie par..</label>
                                <select class="filtered" name="" id="order">
                                    <option value="" selected desabled>--</option>
                                    <option value="asc">Ordre croissant</option>
                                    <option value="desc">Ordre decroissant</option>
                                </select>
                            </div>
                            <div class="sort">
                                <label for="sort">De..</label>
                                <select class="filtered" name="sort" id="sort">
                                    <option value="" selected desabled>--</option>
                                    <option value="firstname">Nom</option>
                                    <option value="lastname">Prenom</option>
                                    <option value="email">Email</option>
                                </select>
                            </div>
                            <div class="gender">
                                <label for="gender">Genre..</label>
                                <select class="filtered" name="gender" id="gender">
                                    <option value="" selected desabled>--</option>
                                    <option value="male">Masculin</option>
                                    <option value="female">Feminin</option>
                                </select>
                            </div>
                            <div class="status">
                                <label for="status">Statut..</label>
                                <select class="filtered" name="status" id="status">
                                    <option value="" selected desabled>--</option>
                                    <option value="male">Actif</option>
                                    <option value="female">Inactif</option>
                                </select>
                            </div>
                            <div class="search">
                                {{-- <input class="form-control search-input filtered" type="search" placeholder="Taper.." aria-label="Search">
                                <button class="btn btn-outline-success filtered" type="submit">Search</button> --}}
                                <form class="search-form d-flex" action="{{ route('users.total') }}" method="GET">
                                    <input class=" search-input filtered" type="search" name="search"
                                        placeholder="Recherche..." aria-label="Search">
                                </form>
                            </div>
                        </div>
                        <div class="">
                            <table id="example" class="table" style="width:100%">
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
                                        <td>
                                            <a href="{{ $user->i }}" class="btn btn-sm btn-{{ $user->status ? 'danger' : 'success' }}">
                                                {{ $user->status ? 'Desactive' : 'Active' }}
                                            </a>
                                        </td>
                                        <td>{{ $user->role_id === 1 ? 'Admin' : 'Gestionnaire' }}</td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/users/update/' . $user->id) }}" title="Modifier"
                                                class="btn btn-warning btn-sm ">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            <form method="POST">
                                                <a class="btn btn-primary mx-3 btn-sm" title="Voir plus"
                                                    href="{{ url('/users/show_user/' . $user->id) }}"style="text-decoration: 0;color:black;">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </form>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked">
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
