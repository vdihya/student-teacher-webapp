<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <i class="ni ni-fat-add text-danger"></i> {{ __('Q&A') }}
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                   
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">

                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-danger"></i> {{ __('Dashboard') }}
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-products" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-products">
                        <i class="ni ni-box-2 text-danger"></i>
                        <span class="nav-link-text">{{ __('Products') }}</span>
                    </a>

                    <div class="collapse" id="navbar-products">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('addProduct') }}">
                                    <i class="ni ni-fat-add text-danger"></i> {{ __('Add Product') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('viewProducts') }}">
                                     <i class="ni ni-bullet-list-67"></i> {{ __('View Products') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-orders" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-orders">
                        <i class="ni ni-money-coins text-danger"></i>
                        <span class="nav-link-text">{{ __('Orders') }}</span>
                    </a>

                    <div class="collapse" id="navbar-orders">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('formpurchaseinfo') }}">
                                    <i class="ni ni-cart text-danger"></i> {{ __('Record Order') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('purchases') }}">
                                     <i class="ni ni-bullet-list-67"></i> {{ __('View Orders') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="ni ni-single-copy-04 text-danger"></i>
                        <span class="nav-link-text">{{ __('Reports') }}</span>
                    </a>

                    <div class="collapse" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('POreportform') }}">
                                  <i class="ni ni-sound-wave text-dark"></i>    {{ __('Purchase Orders') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('PROreportform') }}">
                                   <i class="ni ni-sound-wave text-dark"></i> {{ __('Products') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('USERreportform') }}">
                                   <i class="ni ni-sound-wave text-dark"></i> {{ __('Users') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-reports" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-reports">
                        <i class="ni ni-money-coins text-danger"></i>
                        <span class="nav-link-text">{{ __('Graph reports') }}</span>
                    </a>

                    <div class="collapse" id="navbar-reports">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('reportForm') }}">
                                    <i class="ni ni-cart text-danger"></i> {{ __('Create Graph Report') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showReport') }}">
                                     <i class="ni ni-bullet-list-67"></i> {{ __('View Reports') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
         
        </div>
    </div>
</nav>