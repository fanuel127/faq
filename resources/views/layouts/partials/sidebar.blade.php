<div class="d-flex" id="wrapper">

    <!-- sidebar starts here -->

    <div class="bg-secondary" id="sidebar-wrapper">

        <div class="sidebar-heading text-center py-4 success-text fs-4 fw-bold text-uppercase border-bottom">
            <i class="fas fa-user-secret me-2"> <a href="{{ url('/dashboard') }}" id="liens">FAQ</a></i>
        </div>

        <div class="list-group list-group-flush my-3">
            <a href="{{ url('/dashboard') }}" class="bg-warning" id="liens"
                style="margin-bottom: 20px; padding-top:20px; margin-top:0;padding-bottom:20px;color:white;">
                <h4><i class="fas fa-tachometer-alt me-2"></i>Tableau de Bord</h4>
            </a>
            <br>
            <aside id="sidebar">
                <ul class="sidebar-nav">
                    <li class="sidebar sidebar-item" id="adminSidebar">
                        <h4 class="fw-bold" style="color: whitesmoke;">Gestions des utilisateurs</h4>
                        <a href="#" id="bord"
                            class="sidebar-link has-dropdown collapsed list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="bi bi-people-fill me-2" style="color: orange; margin-left:15px"></i>Utilisateur
                        </a>

                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ url('/users/add_user') }}"
                                    class="dashboard-link sidebar-link bg-transparent second-text fw-bold"
                                    style="margin-left: 20%">
                                    <i class="bi bi-person-fill-add me-2" style="color: orange;"></i>Ajouter
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ url('/users/list_user') }}"
                                    class="dashboard-link sidebar-link bg-transparent second-text fw-bold"
                                    style="margin-left: 20%">
                                    <i class="bi bi-person-lines-fill me-2" style="color: orange;"></i>Liste
                                </a>
                            </li>
                        </ul>
                    </li>
                    <br>
                    <li class="sidebar-item">
                        <h4 class="fw-bold" style="color: whitesmoke;">Gestions des questions</h4>
                        <a href="#" id="bord"
                            class="sidebar-link has-dropdown collapsed list-group-item list-group-item-action bg-transparent second-text fw-bold"
                            data-bs-toggle="collapse" data-bs-target="#quest" aria-expanded="false" aria-controls="quest">
                            <i class="bi bi-question-diamond-fill me-2" style="color: orange;"></i>Questions
                        </a>
                        <ul id="quest" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ url('/questions/add_question') }}"
                                    class="sidebar-limk bg-transparent second-text fw-bold" style="margin-left: 20%">
                                    <i class="bi bi-plus-circle-fill me-2" style="color: orange;"></i>Ajouter
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ url('/questions/list_question') }}"
                                    class="sidebar-link bg-transparent second-text fw-bold" style="margin-left: 20%">
                                    <i class="bi bi-list-task  me-2" style="color: orange;"></i>Liste
                                </a>
                            </li>
                        </ul>
                        <a href="#" id="loginLink" style="text-decoration: 0 ; color:whitesmoke; font-size:20px;" class="fw-bold">
                            <i class="bi bi-diagram-2-fill me-2" style="color: orange; font-size:20px;"></i>Role
                        </a>
                        <div id="roleModal" class="modal">
                            <div class="modal-content">
                                <h2>Select Role</h2>
                                <select id="roleSelect">
                                    <option selected disabled>........</option>
                                    <option value="admin">Admin</option>
                                    <option value="simpleUser">Simple User</option>
                                </select>
                                <div class="d-flex justify-content-between" style="margin-top: 25px;">
                                    <button id="closeModal" class="bg-primary btn-lg" style="width: 400px; margin-left:8px">Close</button>
                                    <button id="submitRole" class="bg-warning btn-lg" style="width: 400px ;">Submit</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </aside>
            {{-- <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                <i class="fas fa-project-diagram me-2"></i>Logout
            </a> --}}
        </div>

    </div>
</div>
