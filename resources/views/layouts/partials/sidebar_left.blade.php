<aside class="sidebar sidebar-left sidebar-menu">
    <!-- START Sidebar Content -->
    <section class="content slimscroll">
        <!-- START Template Navigation/Menu -->
        @include('layouts/partials/menu_level', [ 'parent' => false, 'children' => $main_menu ])
        <!--/ END Template Navigation/Menu -->

        <!-- START Sidebar summary -->
        @if(0)
            @include('layouts/partials/sidebar_left_summary_charts')
        @endif
        <!--/ END Sidebar summary -->
    </section>
    <!--/ END Sidebar Container -->
</aside>