<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="m-0">
                    {{-- <i :class="titleHeader?.icon ? titleHeader?.icon : icono "></i>--}}
                    {{Route::currentRouteName()}}
                </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="/principal">Home</a></li>
                    @if (Route::currentRouteName() != 'home')
                        <li class="breadcrumb-item active" aria-current="page" >
                            {{Route::currentRouteName()}}
                        </li>
                    @endif
                    {{-- <li class="breadcrumb-item active" aria-current="page">
                        {{ route.name }}
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"
                        v-if="titleHeader?.subTitulo">
                        {{ titleHeader?.subTitulo }}
                    </li> --}}
                </ol>
            </div>
        </div>
    </div>
</div>
