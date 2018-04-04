<head>
    <!-- START META SECTION -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title or config('app.name') }}</title>
    <meta name="author" content="optimisticdesigns">
    <meta name="description" content="Lander.v2 Admin is a clean and flat backend built with twitter bootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::asset('/image/touch/apple-touch-icon-144x144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::asset('/image/touch/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::asset('/image/touch/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::asset('/image/touch/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{URL::asset('/image/favicon.ico')}}">
    <!--/ END META SECTION -->

    <!-- START STYLESHEETS -->
    <!-- Plugins stylesheet : optional -->
    @yield('asset_css')
    <!--/ Plugins stylesheet : optional -->

    <!-- Application stylesheet : mandatory -->
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/layout.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/uielement.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/plugins/nprogress/nprogress.css')}}">
    <!--/ Application stylesheet -->

    <!-- Theme stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('/css/themes/theme.css')}}">
    <!--/ Theme stylesheet -->

    <!-- modernizr script -->
    <script type="text/javascript" src="{{URL::asset('/plugins/modernizr/js/modernizr.js')}}"></script>
    <!--/ modernizr script -->
    <!-- END STYLESHEETS -->
</head>