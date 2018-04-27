@extends('layouts.errors')

@section('content')
<!-- Upper Text -->
<div class="panel-body text-center">
    <i class="ico-shield4 longshadow fsize112 text-default"></i>
</div>
<div class="panel-body text-center">
    <h1 class="semibold longshadow text-center text-default fsize32 mb10 mt0">@lang('errors.403.title')!!</h1>
    <h4 class="semibold text-primary text-center nm">@lang('errors.403.msg')</h4>
</div>
<!--/ Upper Text -->
@endsection