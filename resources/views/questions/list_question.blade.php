@extends('layouts.admin')

@section('content')
    <div style="display:flex; justify-content:space-between;margin: 30px;">
        <h4>Gestions des questions</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" style="color: black;">Accueil</a></li>
                <li class="breadcrumb-item">Questions</li>
                <li class="breadcrumb-item active" aria-current="page">Liste des questions</li>
            </ol>
        </nav>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="d-flex justify-content-between ">
                                <h4>Liste des questions</h4>
                                <a href="{{ url('/questions/add_question') }}" class="btn btn-warning"
                                    title="Ajouter une nouvelle question">
                                    <i class="fas fa-plus"></i>
                                    Ajouter
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <table id="example" class="table" style="width:100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Categorie</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Video</th>
                                        <th>Solution</th>
                                        <th>Actions</th>
                                    </tr>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($questions as $question)
                                        @php
                                            $i++;
                                        @endphp
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $question->questionName }}</td>
                                        <td>{{ $question->category_id === 1 ? 'Probleme Serveur' : 'Difficulte de lecture' }}</td>
                                        <td>{{ $question->description }}</td>
                                        <td>
                                            @if ($question->photo)
                                                <img src="{{ asset('image/' . $question->photo) }}"
                                                    alt="{{ $question->questionName }}">
                                            @endif
                                        </td>
                                        <td>{{ $question->video }}</td>
                                        <td>{{ $question->answer }}</td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/questions/update/' .$question->id) }}" title="Modifier" class="btn btn-warning ">
                                                <i class="fas fa-edit "></i>
                                            </a>
                                            
                                            <form method="POST">
                                                <a class="btn btn-primary mx-3" title="Voir plus"
                                                    href="#"style="text-decoration: 0;color:black;">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </form>
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
