@extends('layouts.admin')

@section('content')
    <div style="display:flex; justify-content:space-between;margin: 30px;">
        <h4>Gestions des questions</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"
                        style="color: black;text-decoration:0;">Accueil</a></li>
                <li class="breadcrumb-item">Questions</li>
                <li class="breadcrumb-item active" aria-current="page">Liste des questions</li>
            </ol>
        </nav>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card rounded-0">
                    <div class="card-header bg-secondary">
                        <div class="card-title">
                            <div class="d-flex justify-content-between ">
                                <h4 class="text-center text-light  pt-3"><i
                                        class="bi bi-list-ul text-warning me-2"></i>Liste des questions</h4>
                                <a href="{{ url('/questions/add_question') }}" id="mybutton"
                                    class="btn btn-warning pt-2 mt-2 text-center rounded-0">
                                    <i class="fas fa-plus"></i>
                                    Ajouter
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between bg-light pt-1">
                            <form action="{{ url('/questions/list_question') }}" method="GET">
                                <div class="filter-bar d-flex justify-content-between bg-light mt-2 mb-3 rounded-0"
                                    id="filter-bar" style="padding-top: 10px; padding-bottom:10px;">
                                    <div class="order">
                                        <label for="sortOrder">Trie par..</label>
                                        <select class="filtered" name="sortOrder" id="sortOrder">
                                            <option value="" selected>--</option>
                                            <option value="asc">Ordre croissant</option>
                                            <option value="desc">Ordre decroissant</option>
                                        </select>
                                    </div>
                                    <div class="sort mx-4 ms-5">
                                        <label for="sortField">De..</label>
                                        <select class="filtered" name="sortField" id="sortField" style="width: 13vh;">
                                            <option value="" selected desabled>--</option>
                                            <option value="questionName">Nom</option>
                                        </select>
                                    </div>
                                    <div class="name mx-3">
                                        <label for="category_id">categorie..</label>
                                        <select class="filtered" name="category_id" id="category_id">
                                            <option value="" selected>--</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="ms-4">
                                        <button type="submit" class="btn btn-warning text-white rounded-0 btn-sm" id="filterButton" style="width: 10vh;height:4vh;">
                                            filtrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="filter-bar search mt-2 mb-3">
                                <form class="search-form d-flex" action="/search" method="GET">
                                    <div class="input-group">
                                        <input class="search-input form-control filtered" type="search" id="myinpu" name="search" style="width: 50vh;"
                                        placeholder="Recherche..." aria-label="Search" value="{{ isset($search) ? $search : '' }}">
                                        <button type="submit" class="btn btn-primary" id="myinpu" style="width: 10vh;"><i class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive-xxl mt-3">
                            <table id="example" class="table table-striped table-hover h-100 vertical-align-middle" style="width:100%; height:100%;">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Categorie</th>
                                        <th>Solution</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($questions as $question)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $question->questionName }}</td>
                                            <td>{{ $question->category->name }}</td>
                                            <td>{{ $question->answer }}</td>
                                            <td class="d-flex vertical-align-middle">
                                                <a href="{{ url('/questions/update/' . $question->id) }}" title="Modifier"
                                                    class="btn btn-warning rounded-0 ">
                                                    <i class="fas fa-edit "></i>
                                                </a>

                                                <form method="POST">
                                                    <a class="btn btn-primary mx-3 rounded-0" title="Voir plus"
                                                        href="{{ url('/questions/show_question/' . $question->id) }}"style="text-decoration: 0;color:black;">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {{ $questions->links() }}
                            </div>
                        </div>
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
