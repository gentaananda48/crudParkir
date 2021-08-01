
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
            name="viewport"
        />
        <title>@yield('title')</title>

        {{-- Favicon --}}
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.ico" />

        <!-- General CSS Files -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous"
        />

        <!-- CSS Libraries -->


        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/assets/css/style.css" />
        <link rel="stylesheet" href="{{asset('assets')}}/assets/css/components.css" />
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar" >
                    <form class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li>
                                <a
                                    href="#"
                                    data-toggle="sidebar"
                                    class="nav-link nav-link-lg"
                                    ><i class="fas fa-bars"></i
                                ></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-toggle="search"
                                    class="nav-link nav-link-lg d-sm-none"
                                    ><i class="fas fa-search"></i
                                ></a>
                            </li>
                        </ul>
                    </form>
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown dropdown-list-toggle">
                            <div
                                class="
                                    dropdown-menu
                                    dropdown-list
                                    dropdown-menu-right
                                "
                            ></div>
                        </li>

                        <li class="dropdown">
                            <a
                                href="#"
                                data-toggle="dropdown"
                                class="
                                    nav-link
                                    dropdown-toggle
                                    nav-link-lg nav-link-user
                                "
                            >
                                <div class="d-sm-none d-lg-inline-block">
                                    Hi, Admin!
                                </div></a
                            >
                            <div class="dropdown-menu dropdown-menu-right">
                                <a
                                    href="#"
                                    class="dropdown-item has-icon text-danger"
                                >
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="main-sidebar">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="/admin">Laraveru!</a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="/admin">LV</a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="bi bi-bar-chart-line"></i><span>Dashboard</span></a>
                                <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{url('parkir/create')}}"><i class="far fa-file-alt"></i>Add Parkir</a></li>
                                <li><a class="nav-link" href="{{url('parkir')}}"><i class="fas fa-bicycle"></i>Parkir List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </aside>
                </div>


                @yield('content')



    <footer class="main-footer">
                    <div class="footer-left">Copyright &copy;Laraveru 2021</div>
                    <div class="footer-right">2.3.0</div>
                </footer>
            </div>
        </div>

        <!-- General JS Scripts -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


        <!-- JS Libraies -->

        <!-- Template JS File -->
        <script src="{{asset('assets')}}/assets/js/scripts.js"></script>
        <script src="{{asset('assets')}}/assets/js/custom.js"></script>

        <!-- Page Specific JS File -->
    </body>
</html>
