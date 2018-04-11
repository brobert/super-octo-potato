<header id="header" class="navbar">
    <!-- START navbar header -->
    <div class="navbar-header">
        <!-- Brand -->
        <a class="navbar-brand" href="/">
            <span class="logo-figure"></span>
            <span class="logo-text"></span>
        </a>
        <!--/ Brand -->
    </div>
    <!--/ END navbar header -->

    <!-- START Toolbar -->
    <div class="navbar-toolbar clearfix">
        <!-- START Left nav -->
        <ul class="nav navbar-nav navbar-left">
            <!-- Sidebar shrink -->
            <li class="hidden-xs hidden-sm">
                <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                    <span class="meta">
                        <span class="icon"></span>
                    </span>
                </a>
            </li>
            <!--/ Sidebar shrink -->

            <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <li class="navbar-main hidden-lg hidden-md hidden-sm">
                <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                    <span class="meta">
                        <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                    </span>
                </a>
            </li>
            <!--/ Offcanvas left -->

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">First item</a></li>
                        <li><a href="#">Second item</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Third item</a></li>
                    </ul>
            </li>

        </ul>
        <!--/ END Left nav -->

        <!-- START navbar form -->
        <div class="navbar-form navbar-left dropdown" id="dropdown-form">
            <form action="" role="search">
                <div class="has-icon">
                    <input type="text" class="form-control" placeholder="Search application...">
                    <i class="ico-search form-control-icon"></i>
                </div>
            </form>
        </div>
        <!-- START navbar form -->

        <!-- START Right nav -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Notification dropdown -->
                @include('layouts/partials/messages_dropdown')
            <!--/ Notification dropdown -->

            <!-- Profile dropdown -->
            <li class="dropdown profile">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="meta">
                        <span class="avatar"><img src="/image/avatar/avatar7.jpg" class="img-circle" alt="" /></span>
                        <span class="text hidden-xs hidden-sm pl5">{{ $user->full_name()}} [{{$user->type}}]</span>
                    </span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{route('account.edit')}}"><span class="icon"><i class="ico-user-plus2"></i></span> My Accounts</a></li>
                    <li><a href="javascript:void(0);"><span class="icon"><i class="ico-cog4"></i></span> Profile Setting</a></li>
                    <li><a href="javascript:void(0);"><span class="icon"><i class="ico-question"></i></span> Help</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            <!-- Profile dropdown -->

            @if( config('custom.sidebar_right') )
            <!-- Offcanvas right This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <li class="navbar-main">
                <a href="javascript:void(0);" data-toggle="sidebar" data-direction="rtl" rel="tooltip" title="Feed / contact sidebar">
                    <span class="meta">
                        <span class="icon"><i class="ico-users3"></i></span>
                    </span>
                </a>
            </li>
            <!--/ Offcanvas right -->
            @endif

        </ul>
        <!--/ END Right nav -->
    </div>
    <!--/ END Toolbar -->
</header>