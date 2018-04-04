@extends('layouts.blank')

@section('page_title')
Lander.v2 - Login Page
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="/javascript/backend/pages/login.js"></script>
@endsection

@section('content')
<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <section class="container">
        <!-- START row -->
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <!-- Brand -->
                <div class="text-center" style="margin-bottom:40px;">
                    <span class="logo-figure inverse"></span>
                    <span class="logo-text inverse"></span>
                    <h5 class="semibold text-muted mt-5">@lang('auth.login.title')</h5>
                </div>
                <!--/ Brand -->

                <!-- Social button -->
                @if(0)
                <ul class="list-table">
                    <li><button type="button" class="btn btn-block btn-facebook">Connect with <i class="ico-facebook2 ml5"></i></button></li>
                    <li><button type="button" class="btn btn-block btn-twitter">Connect with <i class="ico-twitter2 ml5"></i></button></li>
                </ul>
                <!-- Social button -->
                @endif

                <hr><!-- horizontal line -->

                <!-- Login form -->
                <form class="panel _auth-form" name="form-login" action="/login" method="post">
                {{csrf_field()}}
                    <div class="panel-body">
                    @if(0)
                        <div class="form-group">
                            <select class="form-control" name="lang">
                                <option value="0">Select language</option>
                                <option value="en">English</option>
                                <option value="da">Danish - Dansk</option>
                                <option value="nl">Dutch - Nederlands</option>
                                <option value="en-gb">English - UK</option>
                                <option value="fr">French - français</option>
                                <option value="de">German - Deutsch</option>
                            </select>
                        </div>
                    @endif
                        <div class="form-group">
                            <div class="form-stack has-icon pull-left">
                                <input name="email" type="text" class="form-control input-lg" placeholder="@lang('auth.login.field.email')" data-parsley-errors-container="#error-container" data-parsley-error-message="@lang('auth.login.error.field.email')" data-parsley-required>
                                <i class="ico-user2 form-control-icon"></i>
                            </div>
                            <div class="form-stack has-icon pull-left">
                                <input name="password" type="password" class="form-control input-lg" placeholder="@lang('auth.login.field.password')" data-parsley-errors-container="#error-container" data-parsley-error-message="@lang('auth.login.error.field.password')" data-parsley-required>
                                <i class="ico-lock2 form-control-icon"></i>
                            </div>
                        </div>

                        <!-- Error container -->
                        <div id="error-container"class="mb15"></div>
                        <!--/ Error container -->

                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="checkbox custom-checkbox">
                                        <input type="checkbox" name="remember" id="remember" value="1">
                                        <label for="remember">&nbsp;&nbsp;@lang('auth.login.error.field.remember')</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <a href="javascript:void(0);">@lang('auth.login.lost-password')</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group nm">
                            <button type="submit" class="btn btn-block btn-success"><span class="semibold">@lang('auth.login.login_button')</span></button>
                        </div>
                    </div>
                </form>
                <!-- Login form -->

                <hr><!-- horizontal line -->

                <p class="text-muted text-center">@lang('auth.login.no_account') <a class="semibold" href="/register">@lang('auth.login.go_to_register')</a></p>
            </div>
        </div>
        <!--/ END row -->
    </section>
    <!--/ END Template Container -->
</section>
<!--/ END Template Main -->
@endsection


