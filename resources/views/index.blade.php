@extends('layouts.admin')

@section('content')
<div class="row">
    <!-- START Left Side -->
    <div class="col-md-9">

        <!-- Website States -->
        <div class="row">
            <div class="col-sm-12">
                <!-- START panel -->
                <div class="panel ">
                    <!-- panel-toolbar -->
                    <div class="panel-heading pt10">
                        <div class="panel-toolbar">
                            <h5 class="semibold nm ellipsis">Website Stats</h5>
                        </div>
                    </div>
                    <!--/ panel-toolbar -->
                    <!-- panel-body -->
                    <div class="panel-body pt0">
                        <div class="chart mt10" id="chart-audience" style="height:250px; width:100%"></div>
                    </div>
                    <!--/ panel-body -->
                    <!-- panel-footer -->
                    <div class="panel-footer hidden-xs">
                        <ul class="nav nav-section nav-justified">
                            <li>
                                <div class="section">
                                    <h4 class="bold text-default mt0 mb5" data-toggle="counterup">24,548</h4>
                                    <p class="nm text-muted">
                                        <span class="semibold">Visits</span>
                                        <span class="text-muted mr5 ml5">•</span>
                                        <span class="text-danger"><i class="ico-arrow-down4"></i> 32%</span>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="section">
                                    <h4 class="bold text-default mt0 mb5" data-toggle="counterup">175,132</h4>
                                    <p class="nm text-muted">
                                        <span class="semibold">Page Views</span>
                                        <span class="text-muted mr5 ml5">•</span>
                                        <span class="text-success"><i class="ico-arrow-up4"></i> 15%</span>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="section">
                                    <h4 class="bold text-default mt0 mb5"><span data-toggle="counterup">89.96</span>%</h4>
                                    <p class="nm text-muted">
                                        <span class="semibold">Bounce Rate</span>
                                        <span class="text-muted mr5 ml5">•</span>
                                        <span class="text-success"><i class="ico-arrow-up4"></i> 3%</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/ panel-footer -->
                </div>
                <!--/ END panel -->
            </div>
        </div>
        <!--/ Website States -->

        <!-- Browser Breakpoint -->
        <div class="row">
            <div class="col-lg-12">
                <!-- START panel -->
                <div class="panel panel-default">
                    <!-- panel heading/header -->
                    <div class="panel-heading">
                        <h3 class="panel-title ellipsis"><i class="ico-chrome mr5"></i>Browser Breakpoint</h3>
                        <!-- panel toolbar -->
                        <div class="panel-toolbar text-right">
                            <!-- option -->
                            <div class="option">
                                <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                            </div>
                            <!--/ option -->
                        </div>
                        <!--/ panel toolbar -->
                    </div>
                    <!--/ panel heading/header -->
                    <!-- panel body with collapse capabale -->
                    <div class="table-responsive panel-collapse pull out">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Browser Name</th>
                                    <th>Rendering Engine</th>
                                    <th>Platform</th>
                                    <th>Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="semibold text-accent">Google Chrome</span></td>
                                    <td>Webkit</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>
                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">2,4,1,5,3</span>
                                        <span class="text-muted mr5 ml5">•</span>
                                        <span class="semibold text-muted">50.65%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="semibold text-accent">Safari</span></td>
                                    <td>Webkit</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>
                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">5,2,1,3,4</span>
                                        <span class="text-muted mr5 ml5">•</span>
                                        <span class="semibold text-muted">20.31%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="semibold text-accent">Mozilla Firefox</span></td>
                                    <td>Webkit</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>
                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">2,1,5,3,4</span>
                                        <span class="text-muted mr5 ml5">•</span>
                                        <span class="semibold text-muted">61.22%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="semibold text-accent">Internet Explorer</span></td>
                                    <td>Trident</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>
                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">3,1,4,5,2</span>
                                        <span class="text-muted mr5 ml5">•</span>
                                        <span class="semibold text-muted">0.65%</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/ panel body with collapse capabale -->
                </div>
                <!--/ END panel -->
            </div>
        </div>
        <!-- Browser Breakpoint -->
    </div>
    <!--/ END Left Side -->

    <!-- START Right Side -->
    <div class="col-md-3">
        <div class="panel panel-minimal">

			<div class="panel">
                <div class="panel-body">
                    <h4 class="semibold nm"><i class="ico-dollar mr5"></i>Today Income</h4>
                    <h2 class="thin mt5 text-muted">+<span data-toggle="counterup">1120</span></h2>
                    <!-- chart -->
                    <div class="chart" style="height:120px; width:100%;" id="stats1"></div>
                    <!--/ chart -->
                </div>
            </div>

			<div class="widget panel bgcolor-warning">
            <!-- panel body -->
            <div class="panel-body">
                <div class="clearfix">
                    <p class="pull-left semibold">Perth, AU</p>
                    <p class="pull-right semibold">
                        <span class="mr5">°F</span>
                        <span>°C</span>
                    </p>
                </div>
                <div class="text-center mt15 mb15">
                    <h1 class="semibold">
                        <i class="ico-sun22"></i>
                        <span class="">32°</span>
                    </h1>
                </div>
                <div class="clearfix">
                    <p class="pull-left semibold nm">
                        <i class="ico-arrow-down5"></i> 31°
                    </p>
                    <p class="pull-right semibold nm">
                        <i class="ico-arrow-up5"></i> 37°
                    </p>
                </div>
            </div>
            <!--/ panel body -->
        </div>

		<div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title"><i class="ico-globe mr5"></i>Traffic</h5>
            </div>
            <ul class="list-group">
                <li class="list-group-item">Visits <span class="semibold pull-right">47650</span></li>
                <li class="list-group-item">Unique Visits <span class="semibold pull-right">15620</span></li>
                <li class="list-group-item">
                    <p>Traffic Sources</p>
                    <p class="mb5 clearfix">
                        <i class="ico-circle mr5 text-success"></i>GOOGLE.COM
                        <span class="pull-right semibold">15883</span>
                    </p>
                    <p class="mb5 clearfix">
                        <i class="ico-circle mr5 text-danger"></i>DIRECT TRAFFIC
                        <span class="pull-right semibold">11912</span>
                    </p>
                </li>
            </ul>
        </div>

		</div>
    </div>
    <!--/ END Right Side -->
</div>
@endsection

@push('scripts')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/selectize/js/selectize.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.time.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.tooltip.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="/javascript/backend/pages/dashboard-v1.js"></script>
		<script type="text/javascript" src="/javascript/backend/components/widget.js"></script>
@endpush
