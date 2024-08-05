    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="./index.html" class="text-nowrap logo-img">
                    <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" width="180" alt="" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav"
                    {{ Request::is('admin/home') || Request::is('admin/profile') || Request::is('admin/form') || Request::is('admin/table')  || Request::is('admin/forget-password') || Request::is('admin/confirmation-password') ? 'active' : '' }}>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/home') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_home') }}">
                            <span>
                                <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/profile') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_profile') }}">
                            <span>
                                <i class="ti ti-user-circle"></i>
                            </span>
                            <span class="hide-menu">Profile</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">UI COMPONENTS</span>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/form') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_form') }}"">
                            <span>
                                <i class="ti ti-file-description"></i>
                            </span>
                            <span class="hide-menu">Forms</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/table') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_table') }}"">
                            <span>
                                <i class="ti ti-table"></i>
                            </span>
                            <span class="hide-menu">Table</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">AUTH</span>
                    </li>
                    <li class="sidebar-item {{ Request::is('sign_up') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('sign_up') }}">
                            <span>
                                <i class="ti ti-user-plus"></i>
                            </span>
                            <span class="hide-menu">Register</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/forget-password') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_forget_password') }}">
                            <span>
                                <i class="ti ti-rotate"></i>
                            </span>
                            <span class="hide-menu">Forget Password</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/confirmation-code') ? 'active' : '' }} ">
                        <a class="sidebar-link" href="{{ route('admin_confirmation_code') }}">
                            <span>
                                <i class="ti ti-code"></i>
                            </span>
                            <span class="hide-menu">Confirmation Code</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
