@extends('app')
@section('content')
    <div class="page-header align-items-start min-vh-100" style="background-image: url('../assets/img/1635.jpg');">
        <span class="mask bg-gradient-dark opacity-9"></span>
        <div class="container my-auto">
            <div class="page-header clear-filter">
                <div class="page-header-image"></div>
                <div class="text-center w-100">
                    <div class="col-md-8 mx-auto my-8">
                        <div class="brand">
                            <h1 class="title text-white">
                                Sistem E-Parking Elektro
                            </h1>
                            <h3 class="description text-white">Prototipe Tugas Besar PSI</h3>
                            <br />
                            @auth
                                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">Dashboard</a>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Sign in</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-12 col-md-6 my-auto">
                    <div class="col-lg-8 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made by
                            <a class="font-weight-bold" target="_blank">Bagus | Elza | Amanda | Vita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
@endsection
