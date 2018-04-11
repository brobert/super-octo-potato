@extends('layouts.admin')

@section('content')
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Profile / account settings</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li class="active">Profile |{{$scope}}|</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <!-- Left / Top Side -->
                    <div class="col-lg-3">
                        <!-- tab menu -->
                        <ul class="list-group list-group-tabs">
                            <li class="list-group-item active">
                                <a href="#profile" data-toggle="tab"><i class="ico-user2 mr5"></i> @lang('auth.form.profile.title')</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#password" data-toggle="tab"><i class="ico-key2 mr5"></i> @lang('auth.form.password.title')</a></li>
                        </ul>
                        <!-- tab menu -->

                        <hr><!-- horizontal line -->

                        <!-- figure with progress -->
                        <ul class="list-table">
                            <li style="width:70px;">
                                <img class="img-circle img-bordered" src="../image/avatar/avatar7.jpg" alt="" width="65px">
                            </li>
                            <li class="text-left">
                                <h5 class="semibold ellipsis mt0">{{$user->full_name()}}</h5>
                            </li>
                        </ul>
                        <!--/ figure with progress -->

                        <hr><!-- horizontal line -->

                        <!-- follower stats -->
                        <ul class="nav nav-section nav-justified mt15">
                            <li>
                                <div class="section">
                                    <h4 class="nm semibold">12.5k</h4>
                                    <p class="nm text-muted">@lang('auth.form.label.message')</p>
                                </div>
                            </li>
                            <li>
                                <div class="section">
                                    <h4 class="nm semibold">1853</h4>
                                    <p class="nm text-muted">@lang('auth.form.label.message')</p>
                                </div>
                            </li>
                        </ul>
                        <!--/ follower stats -->
                    </div>
                    <!--/ Left / Top Side -->

                    <!-- Left / Bottom Side -->
                    <div class="col-lg-9">
                        <!-- START Tab-content -->
                        <div class="tab-content">
                            <!-- tab-pane: profile -->
                                @include('auth/account/partials/edit_basic')
                            <!--/ tab-pane: profile -->

                            <!-- tab-pane: password -->
                                @include('auth/account/partials/edit_password')
                            <!--/ tab-pane: password -->
                        </div>
                        <!--/ END Tab-content -->
                    </div>
                    <!--/ Left / Bottom Side -->
                </div>
                <!--/ END row -->
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->
@endsection