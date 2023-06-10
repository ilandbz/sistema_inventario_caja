<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </li>
            {{-- <li class="nav-item d-none d-md-block">
                <a href="/home" class="nav-link">Home</a>
            </li> --}}
        </ul>
        <ul class="navbar-nav ms-auto">
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{asset("app/img/user8-128x128.jpg")}}" class="user-image rounded-circle shadow" alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                        <img src="{{asset("app/img/user8-128x128.jpg")}}" class="rounded-circle shadow" alt="User Image">

                        <p>
                            {{ Auth::user()->name }}
                            <small>Miembro desde Jun. 2023</small>
                        </p>
                    </li>
                    <!--end::User Image-->
                    <!--begin::Menu Body-->
                    {{-- <li class="user-body">
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </div>
                        <!--end::Row-->
                    </li> --}}
                    <!--end::Menu Body-->
                    <!--begin::Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Mi Perfil</a>
                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-end"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Cerrar Sesi&oacute;n
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <!--end::Menu Footer-->
                </ul>
            </li>
        </ul>
    </div>
</nav>
