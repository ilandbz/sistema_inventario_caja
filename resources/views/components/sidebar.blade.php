<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="/principal" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{asset("app/img/AdminLTELogo.png")}}" alt="Inventario Logo"
                class="brand-image opacity-75 shadow rounded-circle" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Inventario App</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
       <nav class="mt-2">
           <!--begin::Sidebar Menu-->
           <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
               <li class="nav-header">MEN&Uacute; PRINCIPAL</li>
               <li class="nav-item" >
                   <a href="/home" class="nav-link @if( Request::is('home')) active @endif">
                       <i class="nav-icon fas fa-home"></i>
                       <p>Inicio</p>
                   </a>
               </li>
               <li class="nav-item" >
                    <a href="/usuario" class="nav-link @if( Request::is('usuario')) active @endif">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Usuario</p>
                    </a>
                </li>
                <li class="nav-item @if( in_array( Request::path(), ['productos','producto-perecederos'] )) menu-open @endif">
                    <a href="#" class="nav-link  @if( in_array( Request::path(), ['productos','producto-perecederos'] )) active @endif">
                        <i class="nav-icon fa-solid fa-warehouse"></i>
                        <p>
                            Almacén
                            <i class="nav-arrow fa-solid fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/productos" class="nav-link  @if( Request::is('productos')) active @endif">
                                <i class="nav-icon fa-regular fa-circle"></i>
                                <p>Productos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/producto-perecederos" class="nav-link @if( Request::is('producto-perecederos')) active @endif">
                                <i class="nav-icon fa-regular fa-circle"></i>
                                <p>Productos Perecederos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if( in_array( Request::path(), ['administrar-caja','historial-cajas'] )) menu-open @endif">
                    <a href="#" class="nav-link  @if( in_array( Request::path(), ['administrar-caja','historial-cajas'] )) active @endif">
                        <i class="nav-icon fa-solid fa-cash-register"></i>
                        <p>
                            Caja
                            <i class="nav-arrow fa-solid fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/administrar-caja" class="nav-link  @if( Request::is('administrar-caja')) active @endif">
                                <i class="nav-icon fa-regular fa-circle"></i>
                                <p>Administrar Caja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/historial-cajas" class="nav-link @if( Request::is('historial-cajas')) active @endif">
                                <i class="nav-icon fa-regular fa-circle"></i>
                                <p>Historial Caja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/movimiento-caja/movimientos" class="nav-link  @if( Request::is('movimientos-caja')) active @endif">
                                <i class="nav-icon fa-regular fa-circle"></i>
                                <p>Movimientos Caja</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if( in_array( Request::path(), ['venta/nueva','cliente', 'venta/anular', 'venta'] )) menu-open @endif">
                    <a href="#" class="nav-link  @if( in_array( Request::path(), ['venta/nueva','cliente', 'venta/anular', 'venta'] )) active @endif">
                        <i class="nav-icon fa-solid fa-cart-shopping"></i>
                        <p>
                            Ventas
                            <i class="nav-arrow fa-solid fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cliente" class="nav-link @if( Request::is('cliente')) active @endif">
                                <i class="nav-icon fa-solid fa-users"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/venta" class="nav-link  @if( Request::is('venta')) active @endif">
                                <i class="nav-icon fa-solid fa-cart-plus"></i>
                                <p>Listar Venta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/venta/nueva" class="nav-link  @if( Request::is('venta/nueva')) active @endif">
                                <i class="nav-icon fa-solid fa-cart-plus"></i>
                                <p>Realizar Venta</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="/venta/anular" class="nav-link  @if( Request::is('venta/anular')) active @endif">
                                <i class="nav-icon fa-solid fa-store-slash"></i>
                                <p>Anular Venta</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
               {{-- <li class="nav-item" v-for="menu in menus[0]" :key="menu.id">
                   <a :href="menu.enlace" class="nav-link" :class="{ 'active': menu.enlace == ruta }">
                       <i class="nav-icon" :class="menu.icono"></i>
                       <p>{{ menu.nombre }}</p>
                   </a>
               </li> --}}
           </ul>
           <!--end::Sidebar Menu-->
       </nav>
   </div>
   <!--end::Sidebar Wrapper-->
</aside>
