@extends('layouts.admin')

@section('content')
    <div class="row g-3 my-2" id="mybutton">
        <div className="container-fluid">
            <div class="d-flex justify-content-between">
                <h1>Tableau de bord</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Accueil</li>
                        <li class="breadcrumb-item active" aria-current="page">tableau de bord</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-md-3" id="mybutton">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded-0">
                <div>
                    <form action="{{ route('users.nombre') }}">
                        <h3 class="fs-2">{{ $totalAllUsers }}</h3>
                    </form>
                    <p class="fs-5">totale des utilisateurs</p>
                </div>
                <i class="bi bi-people-fill me-2 fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
        <div class="col-md-3" id="mybutton">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded-0">
                <div>
                    <form action="{{ route('users.nombre') }}">
                        <h3 class="fs-2">{{ $totalAdmin }}</h3>
                    </form>
                    <p class="fs-5">Administrateur</p>
                </div>
                <i class="bi bi-shield-lock-fill fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
        <div class="col-md-3" id="mybutton">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded-0">
                <div>
                    <form action="{{ route('users.nombre') }}">
                        <h3 class="fs-2">{{ $totalUser }}</h3>
                    </form>
                    <p class="fs-5">Gestionnaire</p>
                </div>
                <i class="bi bi-person-fill fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
        <div class="col-md-3" id="mybutton">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded-0">
                <div>
                    <form action="{{ route('users.nombre') }}">
                        <h3 class="fs-2">{{ $totalQuestion }}</h3>
                    </form>
                    <p class="fs-5">totale questions</p>
                </div>
                <i class="bi bi-question-diamond-fill fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-6 mt-4">
            <h3>Liste des utilisateurs</h3>
            <table id="example" class="table table-striped align-middle table-hover text-center" style="height: 50vh;">
                <thead class="table-dark">
                    <tr class="">
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Genre</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                        $users = App\Models\User::all();
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6 table-responsive mt-4">
            <h3>Liste des questions</h3>
            <table id="example" class="table table-striped table-hover align-middle" style="height: 50vh;">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Categorie</th>
                        <th>Description</th>
                        <th>Solution</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                        $questions = App\Models\Question::all();
                    @endphp
                    @foreach ($questions as $question)
                        @php
                            $i++;
                        @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $question->questionName }}</td>
                            <td>{{ $question->category->name }}</td>
                            <td>{{ $question->description }}</td>
                            <td>{{ $question->answer }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
