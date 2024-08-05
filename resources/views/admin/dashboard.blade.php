@extends('layouts.admin')

@section('content')
    <div class="row g-3 my-2">
        <div className="container-fluid">
            <div style="display:flex; justify-content:space-between;margin: 30px;">
                <h1>Tableau de bord</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Accueil</li>
                        <li class="breadcrumb-item active" aria-current="page">tableau de bord</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">{{ $totalAllUsers }}</h3>
                    <p class="fs-5">totale des utilisateurs</p>
                </div>
                <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">{{ $totalAdmin }}</h3>
                    <p class="fs-5">Administrateur</p>
                </div>
                <i class="fas fa-hand-holding fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">{{ $totalUser }}</h3>
                    <p class="fs-5">Gestionnaire</p>
                </div>
                <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">{{ $totalQuestion }}</h3>
                    <p class="fs-5">totale questions</p>
                </div>
                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
    </div>


    {{-- <h3>Tableau de Bord</h3>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3">
                <label style="font-size: 20px;">Totale Utilisateur</label>
                <h1 style="font-size: 50px">{{ $totalAllUsers }} <i class="bi bi-people-fill me-2"
                        style="font-size:90px ; margin-left:250px;"></i></h1>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3">
                <label style="font-size: 20px;">Totale Administrateur</label>
                <h1>{{ $totalUser }} <i class="bi bi-people-fill me-2" style="font-size:90px ; margin-left:250px;"></i>
                </h1>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-danger text-white mb-3">
                <label>Totale Gestionnaire</label>
                <h1>{{ $totalAdmin }} <i class="bi bi-people-fill me-2" style="font-size:90px ; margin-left:250px;"></i>
                </h1>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-warning text-white mb-3">
                <label style="font-size: 20px;">Totale Questions</label>
                <h1 style="font-size: 50px">{{ $totalQuestion }} <i class="bi bi-question-octagon-fill me-2"
                        style="font-size:90px ; margin-left:250px;"></i></h1>
            </div>
        </div> --}}
    </div>

@endsection
