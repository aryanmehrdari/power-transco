<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/cp/dashboard" class="brand-link">
        <img src="/assets/admin/dist/img/admini.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">DonVito Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 542px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-1 mb-1 bp-1 d-flex">

                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" style="width:100%" data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="/cp/dashboard" class="nav-link @yield('activeDashSection')">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard

                                    </p>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" style="width:100%" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->

                            <li class="nav-item has-treeview">
                                <a href="/cp/templets" class="nav-link @yield('activeTempleSection')">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Templets
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="/cp/users" class="nav-link @yield('activeUserSection')">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Users
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </nav>




                    <!-- /.sidebar-menu -->
                </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
</aside>
