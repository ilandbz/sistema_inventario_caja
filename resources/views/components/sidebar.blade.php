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
