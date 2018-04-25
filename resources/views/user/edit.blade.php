@extends('layouts.admin')

@section('content')
<!-- START row -->
<div class="row">
    <div class="col-lg-12">

        <pre>
        {{print_r($user->toArray(), true)}}
        </pre>
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