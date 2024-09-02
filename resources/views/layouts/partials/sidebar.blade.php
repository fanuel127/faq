@if (Auth::user()->role->role_name == 'Admin')
    <div class="d-flex h-100" id="wrapper">
        <div class="bg-secondary" id="sidebar-wrapper">

            <div class="sidebar-heading text-center py-4 success-text fs-4 fw-bold text-uppercase">
                <i class="fas fa-user-secret me-2 fs-2"> <a href="{{ url('/dashboard') }}" id="liens">RESPON</a></i>
            </div>

            <div class="sidebar-heading text-center py-3 success-text fs-4 fw-bold text-uppercase">
                <marquee>
                    <h4 id="liens"><i class="bi bi-shield-lock-fill text-warning me-2">Admin</i></h4>
                </marquee>
            </div>

            <div class="list-group list-group-flush my-3">
                <a href="{{ url('/dashboard') }}" class="bg-warning" id="liens"
                    style="margin-bottom: 20px; padding-top:20px; margin-top:0;padding-bottom:20px;color:white;">
                    <h4 class="ms-3"><i class="fas fa-tachometer-alt me-2"></i>Tableau de Bord</h4>
                </a>
                <br>
                <aside id="sidebar">
                    <ul class="sidebar-nav">
                        <li class="sidebar sidebar-item" id="adminSidebar">
                            <h5 class="fw-bold" style="color: whitesmoke;">Gestions des utilisateurs</h5>
                            <a href="#" id="bord"
                                class="sidebar-link has-dropdown collapsed list-group-item list-group-item-action bg-transparent second-text fw-bold"
                                data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false"
                                aria-controls="auth">
                                <i class="bi bi-people-fill me-2 text-warning" style="margin-left:15px"></i>Utilisateurs
                            </a>

                            <ul id="auth" class="sidebar-dropdown list-unstyled collapse"
                                data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="{{ url('/users/add_user') }}"
                                        class="dashboard-link sidebar-link bg-transparent second-text fw-bold"
                                        style="margin-left: 20%">
                                        <i class="bi bi-person-fill-add me-2 text-warning"></i>Ajouter
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('/users/list_user') }}"
                                        class="dashboard-link sidebar-link bg-transparent second-text fw-bold"
                                        style="margin-left: 20%">
                                        <i class="bi bi-person-lines-fill me-2 text-warning"></i>Liste
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li class="sidebar sidebar-item" id="adminSidebar">
                            <h5 class="fw-bold" style="color: whitesmoke;">Gestions des questions</h5>
                            <a href="#" id="bord"
                                class="sidebar-link has-dropdown collapsed list-group-item list-group-item-action bg-transparent second-text fw-bold"
                                data-bs-toggle="collapse" data-bs-target="#quest" aria-expanded="false"
                                aria-controls="quest">
                                <i class="bi bi-question-diamond-fill me-2 text-warning"
                                    style="margin-left:15px;"></i>Questions
                            </a>

                            <ul id="quest" class="sidebar-dropdown list-unstyled collapse"
                                data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="{{ url('/questions/add_question') }}"
                                        class="dashboard-link sidebar-link bg-transparent second-text fw-bold"
                                        style="margin-left: 20%">
                                        <i class="bi bi-plus-circle-fill me-2 text-warning"></i>Ajouter
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('/questions/list_question') }}"
                                        class="dashboard-link sidebar-link bg-transparent second-text fw-bold"
                                        style="margin-left: 20%">
                                        <i class="bi bi-list-task me-2 text-warning"></i>Liste
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            {{-- <div class="sidebar"> --}}
            <div class="fixed-bottom mb-4">
                <a class="text-white" href="{{ route('logout') }}" id="logoutButton_admin" style="text-decoration: 0;"
                    onclick="event.preventDefault();">
                    <h5 class="ms-3"><i class="fas fa-project-diagram me-2 text-warning"></i>{{ __('Deconnexion') }}
                    </h5>
                </a>

                <form id="logout_form_admin" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <script>
                    document.getElementById('logoutButton_admin').addEventListener('click', function(event) {
                        event.preventDefault(); // Empêche le comportement par défaut
                        Swal.fire({
                            icon: 'warning',
                            title: 'Confirmation de déconnexion',
                            text: 'Voulez-vous vraiment vous déconnecter ?',
                            showDenyButton: true,
                            // showCancelButton: true,
                            denyButtonText: 'Non',
                            confirmButtonText: 'Oui',
                            customClass: {
                                actions: 'my-actions',
                                // cancelButton: 'order-1 right-gap btn1',
                                denyButton: 'order-2 btn1 right-gap',
                                confirmButton: 'order-3 btn1',
                            },
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById('logout_form_admin').submit();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Déconnecté !',
                                    text: "{{ session('status') }}",
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                            } else if (result.isDenied) {
                                Swal.fire(
                                    'Vous êtes toujours connecté.', '', 'info'
                                )
                            }
                        })
                    });
                </script>
            </div>
            {{-- </div> --}}

        </div>
    </div>
@else
    <div class="d-flex h-100" id="wrapper">
        <div class="bg-secondary" id="sidebar-wrapper">

            <div class="sidebar-heading text-center py-4 success-text fs-4 fw-bold text-uppercase">
                <i class="fas fa-user-secret me-2 fs-2"> <a href="{{ url('/dashboard') }}"
                        id="liens">RESPON</a></i>
            </div>

            <div class="sidebar-heading text-center py-3 success-text fs-4 fw-bold text-uppercase">
                <marquee>
                    <h4 id="liens"><i class="bi bi-person-fill text-warning me-2">Gestionnaire</i></h4>
                </marquee>
            </div>

            <div class="list-group list-group-flush my-3">
                <a href="{{ url('/dashboard') }}" class="bg-warning" id="liens"
                    style="margin-bottom: 20px; padding-top:20px; margin-top:0;padding-bottom:20px;color:white;">
                    <h4 class="ms-3"><i class="fas fa-tachometer-alt me-2"></i>Tableau de Bord</h4>
                </a>
                <br>
                <aside id="sidebar">
                    <ul class="sidebar-nav">
                        <li class="sidebar sidebar-item" id="adminSidebar">
                            <h5 class="fw-bold" style="color: whitesmoke;">Gestions des questions</h5>
                            <a href="#" id="bord"
                                class="sidebar-link has-dropdown collapsed list-group-item list-group-item-action bg-transparent second-text fw-bold"
                                data-bs-toggle="collapse" data-bs-target="#quest" aria-expanded="false"
                                aria-controls="quest">
                                <i class="bi bi-question-diamond-fill me-2 text-warning"
                                    style="margin-left:15px;"></i>Questions
                            </a>

                            <ul id="quest" class="sidebar-dropdown list-unstyled collapse"
                                data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="{{ url('/questions/add_question') }}"
                                        class="dashboard-link sidebar-link bg-transparent second-text fw-bold"
                                        style="margin-left: 20%">
                                        <i class="bi bi-plus-circle-fill me-2 text-warning"></i>Ajouter
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('/questions/list_question') }}"
                                        class="dashboard-link sidebar-link bg-transparent second-text fw-bold"
                                        style="margin-left: 20%">
                                        <i class="bi bi-list-task me-2 text-warning"></i>Liste
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <div class="sidebar">
                <div class="fixed-bottom">
                    <a class="text-white text-warning" href="{{ route('logout') }}" id="logoutButton_user"
                        onclick="evently.preventDefault();">
                        <h5 class="ms-3"><i
                                class="fas fa-project-diagram me-2 text-warning"></i>{{ __('Deconnexion') }}</h5>
                    </a>

                    <form id="logout_form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <script>
                        document.getElementById('logoutButton_user').addEventListener('click', function(evently) {
                            evently.preventDefault(); // Empêche le comportement par défaut
                            Swal.fire({
                                icon: 'warning',
                                title: 'Confirmation de déconnexion',
                                text: 'Voulez-vous vraiment vous déconnecter ?',
                                showDenyButton: true,
                                // showCancelButton: true,
                                denyButtonText: 'Non',
                                confirmButtonText: 'Oui',
                                customClass: {
                                    actions: 'my-actions',
                                    // cancelButton: 'order-1 right-gap btn1',
                                    denyButton: 'order-2 btn1 right-gap',
                                    confirmButton: 'order-3 btn1',
                                },
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    document.getElementById('logout_form').submit();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Déconnecté !',
                                        text: "{{ session('status') }}",
                                        showConfirmButton: false,
                                        timer: 2000
                                    });
                                } else if (result.isDenied) {
                                    Swal.fire(
                                        'Vous êtes toujours connecté.', '', 'info'
                                    )
                                }
                            })
                        });
                    </script>
                </div>
            </div>

        </div>
    </div>
@endif
