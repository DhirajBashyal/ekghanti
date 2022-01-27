<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
        <img src="{{URL::asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ekghanti Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link {{'dashboard' == request()->path()? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-header">Banner</li> -->
                <li class="nav-item active">
                    <a href="{{route('banner')}}" class="nav-link {{'banner' == request()->path()? 'active' : ''}} ">
                        <i class="nav-icon fas fa-industry"></i>
                        <p>
                            Banner
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('enhances')}}" class="nav-link {{'enhances' == request()->path()? 'active' : ''}}">
                        <i class="nav-icon fas fa-medal"></i>
                        <p>
                            Ekghanti Enhances
                        </p>
                    </a>
                </li>
                <!-- testinomials -->
                <!-- <li class="nav-header">Testimonial</li> -->
                <li class="nav-item ">
                    <a href="{{route('banner')}}" class="nav-link  ">
                        <i class="nav-icon fas fa-quote-left"></i>
                        <p>
                            Testimonial
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <!-- end testinomials -->
                 <!-- testinomials -->
                <!-- <li class="nav-header">Our Team</li> -->
                <li class="nav-item ">
                    <a href="{{route('banner')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Our Team
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <!-- end testinomials -->

                <!-- <li class="nav-header">Client</li> -->
                <li class="nav-item">
                    <a href="{{route('client')}}" class="nav-link {{'client' == request()->path()? 'active' : ''}}">
                        <i class="nav-icon fas fa-glasses"></i>
                        <p>
                            Client Banner
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Quotes
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- Main Sidebar Container -->
    <!-- /.sidebar -->
</aside>
