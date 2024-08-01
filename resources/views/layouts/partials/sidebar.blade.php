<div class="d-flex" id="wrapper">

    <!-- sidebar starts here -->

    <div class="bg-white" id="sidebar-wrapper">

        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
            <i class="fas fa-user-secret me-2"></i> Admin
        </div>

        <div class="list-group list-group-flush my-3">
            <a href="{{ url('/dashboard') }}" class="bg-warning" style="margin-bottom: 20px; padding-top:20px; margin-top:0;padding-bottom:20px;">
                <h5><i class="fas fa-tachometer-alt me-2"></i>Tableau de Bord</h5>
            </a>
            <br>
            <aside id="sidebar">
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link has-dropdown collapsed list-group-item list-group-item-action bg-transparent second-text fw-bold"
                        data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="bi bi-people-fill me-2"></i>Utilisateur
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ url('/users/add_user') }}" class="dashboard-link sidebar-link bg-transparent second-text fw-bold" style="margin-left: 20%">
                                    <i class="bi bi-person-fill-add me-2"></i>Ajouter
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ url('/users/list_user') }}" class="dashboard-link sidebar-link bg-transparent second-text fw-bold" style="margin-left: 20%">
                                    <i class="bi bi-person-lines-fill me-2"></i>Liste
                                </a>
                            </li>
                        </ul>
                    </li>
                    <br>
                    <li class="sidebar-item">
                        <a href="#"
                            class="sidebar-link has-dropdown collapsed list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            data-bs-toggle="collapse" data-bs-target="#quest" aria-expanded="false"
                            aria-controls="quest"> <i class="bi bi-question-diamond-fill me-2"></i>Questions
                        </a>
                        <ul id="quest" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-limk bg-transparent text-info fw-bold" style="margin-left: 20%">Ajouter</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link bg-transparent text-info fw-bold" style="margin-left: 20%">Modifier</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link bg-transparent text-info fw-bold" style="margin-left: 20%">Liste</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                <i class="fas fa-project-diagram me-2"></i>Logout
            </a>
        </div>

    </div>
</div>
