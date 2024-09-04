<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
        <h5 class="m-0 home-name"><a href="{{ url('/dashboard') }}" id="lien">Accueil</a></h5>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                @guest
                    {{-- @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
                @else
                    {{-- <li><a href="#" class="dropdown-item">Profile</a></li> --}}
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->lastName }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end rounded-0" aria-labelledby="navbarDropdown">
                        <a href="{{ url('/users/profile_user') }}" class="dropdown-item">Profile</a>

                        <a class="dropdown-item" href="{{ route('logout') }}" id="logoutButtons"
                            onclick="event.preventDefault();">
                            {{ __('Deconnexion') }}
                        </a>

                        <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <script>
                            document.getElementById('logoutButtons').addEventListener('click', function(event) {
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
                                        document.getElementById('logoutForm').submit();
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

                </li>
            @endguest
            </li>

        </ul>
    </div>

</nav>
