@extends('layouts.admin')

@section('content')
<!-- START row -->
<div class="row">
    <div class="col-lg-12">
        <!-- START panel -->
        <div class="panel panel-primary">
            <!-- panel heading/header -->
            <div class="panel-heading">
                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-table22"></i></span> Table Showcase</h3>
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
            <!-- panel toolbar wrapper -->
            <div class="panel-toolbar-wrapper pl0 pt5 pb5">
                <div class="panel-toolbar pl10">
                    <div class="checkbox custom-checkbox pull-left">
                        <input type="checkbox" id="customcheckbox-one0" value="1" data-toggle="checkall" data-target="#table1">
                        <label for="customcheckbox-one0">&nbsp;&nbsp;Select all</label>
                    </div>
                </div>
                <div class="panel-toolbar text-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-default"><i class="ico-upload22"></i></button>
                        <button type="button" class="btn btn-sm btn-default"><i class="ico-archive2"></i></button>
                    </div>

                    <button type="button" class="btn btn-sm btn-danger"><i class="ico-remove3"></i></button>
                </div>
            </div>
            <!--/ panel toolbar wrapper -->

            <!-- panel body with collapse capabale -->
            <div class="table-responsive panel-collapse pull out">
                <table class="table table-bordered table-hover" id="table1">
                    <thead>
                        <tr>
                            <th width="3%" class="text-center"><i class="ico-long-arrow-down"></i></th>
                            <th><a href="{{route('users', array_merge( $query, ['sort' => 'name', 'dir' => (!array_has($query, 'dir') || $query['dir'] === 'desc')? 'asc':'desc' ]))}}">Name</a></th>
                            <th><a href="{{route('users', array_merge( $query, ['sort' => 'email', 'dir' => (!array_has($query, 'dir') || $query['dir'] === 'desc')? 'asc':'desc' ]))}}">Email</a></th>
                            <th><a href="{{route('users', array_merge( $query, ['sort' => 'created', 'dir' => (!array_has($query, 'dir') || $query['dir'] === 'desc')? 'asc':'desc' ]))}}">Created</a></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @each('user.table_row', $users, 'user', 'user.table_empty')
                    </tbody>
                </table>
                {{ $users->appends($query)->links() }}
            </div>
            <!--/ panel body with collapse capabale -->
        </div>
    </div>
</div>
<!--/ END row -->
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