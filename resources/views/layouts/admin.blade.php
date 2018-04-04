<!DOCTYPE html>
<html class="backend" lang="{{ app()->getLocale() }}">
    <!-- START Head -->
        @include('layouts.partials.html_head')
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        @include('layouts/partials/header')
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
        @include('layouts/partials/sidebar_left')
        <!--/ END Template Sidebar (Left) -->

        <!-- START Template Sidebar (right) -->
        @if( config('custom.sidebar_right') )
            @include('layouts/partials/sidebar_right')
        @endif
        <!--/ END Template Sidebar (right) -->

        <!-- START Template Main -->
        <section id="main" role="main">
            <div class="container-fluid">
                @if( config('custom.breadcrumb') )
                    <!-- Page Header -->
                    @include('layouts/partials/breadcrumbs')
                    <!-- Page Header -->
                @endif

                @yield('content')

            </div>

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="80%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="{{URL::asset('/javascript/vendor.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('/javascript/core.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('/javascript/backend/app.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('/plugins/nprogress/nprogress.js')}}"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        @stack('scripts')
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>