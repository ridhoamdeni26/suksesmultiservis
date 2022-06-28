<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/img/maimaid/logo2.png') }}" alt="" class="img-fluid">
                    </span>
                    
                    <span class="logo-lg">
                        <img src="{{ url('assets/img/header/logo-main.png') }}" alt="" style="max-width:90%;height:auto;"> <span class="logo-txt"></span>
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/img/maimaid/logo2.png') }}" alt="" class="img-fluid">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url('assets/img/header/logo-main.png') }}" alt="" style="max-width:90%;height:auto;"> <span class="logo-txt"></span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="@lang('translation.Search')" aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(!empty(session()->get( 'session.image_')))
                    <img class="rounded-circle header-profile-user" src="{{ URL::to('/') }}/assets/img/maimaid/profile/{{ session()->get( 'session.image_') }}" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ session()->get( 'session.name_') }}</span>
                    @else
                    <img class="rounded-circle header-profile-user" src="{{ URL::to('/') }}/backend/img/blank-profile.png" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ session()->get( 'session.name_') }}</span>
                    @endif
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="apps-contacts-profile"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile </a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle me-1"></i> Password </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <span key="t-logout">@lang('translation.Logout')</span></a>
                    <form id="logout-form" action="#" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>