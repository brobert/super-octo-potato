
<!-- form password -->
<form class="panel form-horizontal form-bordered" name="form-profile" method="POST" action="{{route($routeName, ['scope' => 'password', 'id' => $user->id])}}">
    @csrf
    <div class="panel-body pt0 pb0">
        <div class="form-group header bgcolor-default">
            <div class="col-md-12">
                <h4 class="semibold text-primary mt0 mb5">@lang('auth.form.password.title')</h4>
                <p class="text-default nm">@lang('auth.form.password.desc')</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">@lang('auth.form.profile.field.old_password')</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="old_password">
            </div>
            @includeWhen($errors->has('old_password'), 'layouts/partials/form_errors', ['err_name' => 'old_password'])
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">@lang('auth.form.profile.field.password')</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password">
            </div>
            @includeWhen($errors->has('password'), 'layouts/partials/form_errors', ['err_name' => 'password'])
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">@lang('auth.form.profile.field.password_confirm')</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password_confirmation">
            </div>
            @includeWhen($errors->has('password_confirmation'), 'layouts/partials/form_errors', ['err_name' => 'password_confirmation'])
        </div>
    </div>
    @include('auth/account/partials/form_buttons')
</form>
