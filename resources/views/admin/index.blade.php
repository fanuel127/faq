<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" />

 <style>

:root {
    --main-bg-color: rgb(20, 177, 20);
    --main-text-color: rgb(106, 231, 106);
    --second-text-color:#bbbec5;
    --second-bg-color: #c1efde;
  }

  .primary-text {
    color: var(--main-text-color);
  }

  .second-text {
    color: var(--second-bg-color);
  }

  .primary-bg {
    background-color: var(--main-bg-color);
  }

  .secondary-bg {
    background-color: var(--second-bg-color);
  }

  .rounded-full {
    border-radius: 100%;
  }

  #wrapper {
    overflow-x: hidden;
    background-image: linear-gradient(
      to right,
        #636cf1,
        #e7578e,
        #cbf7ce,
        #c18b2c,
        #d73a25
        );
  }

  #sidebar-wrapper {
    min-height: 100vh;
    margin-left: -15rem;
    transition: margin 0.25s ease-out;
  }

  #sidebar-wrapper .sidebar-heading {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
  }

  #sidebar-wrapper .list-group {
    width: 15rem;
  }

  #page-content-wrapper {
    min-width: 100vw;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: 0;
  }

  #menu-toggle {
    cursor: pointer;
  }

  .list-group-item {
    border: none;
    padding: 20px 30px;
  }

  .list-group-item.active {
    background-color: transparent;
    color: var(--main-text-color);
    font-weight: bold;
    border: none;
  }

  @media(min-width:768px) {
    #sidebar-wrapper {
      margin-left: 0;
    }

    #page-content-wrapper {
      min-width: 0;
      width: 100%;
    }

    #wrapper.toggled #sidebar-wrappper {
      margin-left: -15rem;

    }
  }

 </style>
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- sidebar start here -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom ">
                <i class="fas fa-user-secret me-2"></i>codersbite
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-project-diagram me-2"></i>Projects
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-chart-line me-2"></i>Analystics
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-paperclip me-2"></i>Report
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-shopping-cart me-2"></i>Store mrg
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-gift me-2"></i>Products
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-comment-dots me-2"></i>Chat
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-map-marker-alt me-2"></i>Outlet
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-project-diagram me-2"></i>Logout
                </a>

            </div>
        </div>

        <!-- sidebar stop here -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle second-text fw-bold " id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#" class="dropdown-item">Profile</a></li>
                                <li><a href="#" class="dropdown-item">Settings</a></li>
                                <li><a href="#" class="dropdown-item">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3 ">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-item-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i class="fas fa-hand-holding fs-1 primary-text border rounded-full secondary-bg p-3"></i>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-item-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-item-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>

                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <thead style="color: #fff; background-color:black;">
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Genre</th>
                                <th>Email</th>
                                <th>Numero</th>
                                <th>Statut</th>
                                <th>role</th>
                                <th colspan="3">Actions</th>
                            </tr>
                            @foreach ($users as $user)
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->firstName }}</td>
                                <td>{{ $user->lastName }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phoneNumber }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->role_id }}</td>
                                <td>
                                    <a href="{{ url('/users/update/' . $user->id) }}"
                                        class="btn btn-primary"style="text-decoration: 0;color:black;">Edit</a>
                                </td>
                                <td>
                                    <form method="POST">
                                        <a class="btn btn-success"
                                            href="{{ url('/users/show_user/' . $user->id) }}"style="text-decoration: 0;color:black;">Details</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")
        toggleButton.onclick = function() {
            el.classList.toggled("toggled")
        }
    </script>
</body>

</html>
