<div class="tab-pane" id="password">
    <!-- form password -->
    <form class="panel form-horizontal form-bordered" name="form-profile" method="POST" action="{{route('account.update', ['scope' => 'password'])}}">
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
                    <input type="text" class="form-control" name="old_password">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">@lang('auth.form.profile.field.password')</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">@lang('auth.form.profile.field.password_confirm')</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password_confirmation">
                </div>
            </div>
        </div>
        @include('auth/account/partials/form_buttons')
    </form>
</div>