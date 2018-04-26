
<!-- form profile -->
<form class="panel form-horizontal form-bordered" name="form-profile" method="POST" action="{{route($routeName, ['scope' => 'profile', 'id' => $user->id])}}">
    @csrf
    <div class="panel-body pt0 pb0">

        <div class="form-group header bgcolor-default">
            <div class="col-md-12">
                <h4 class="semibold text-primary mt0 mb5">@lang('auth.form.profile.title')</h4>
                <p class="text-default nm">@lang('auth.form.profile.desc')</p>
            </div>
        </div>

        <div class="form-group {{$errors->has('name') || $errors->has('surname') ? 'alert-danger' : ''}}">
            <label class="col-sm-3 control-label">@lang('auth.form.profile.field.name')</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="name" value="{{old('name') ?: $user->name}}">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="surname" value="{{old('surname') ?: $user->surname}}">
            </div>
            @includeWhen($errors->has('name'), 'layouts/partials/form_errors', ['err_name' => 'name'])
            @includeWhen($errors->has('surname'), 'layouts/partials/form_errors', ['err_name' => 'surname'])
        </div>

        <div class="form-group {{$errors->has('email') ? 'alert-danger' : ''}}">
            <label class="col-sm-3 control-label">@lang('auth.form.profile.field.email')</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="email" value="{{old('email') ?: $user->email}}" placeholder="Enter your real email" >
            </div>
            @includeWhen($errors->has('email'), 'layouts/partials/form_errors', ['err_name' => 'email'])
        </div>

        <div class="form-group {{$errors->has('phone') ? 'alert-danger' : ''}}">
            <label class="col-sm-3 control-label">@lang('auth.form.profile.field.phone')</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="phone" value="{{old('phone') ?: $user->phone}}" placeholder="Enter your real phone" >
            </div>
            @includeWhen($errors->has('phone'), 'layouts/partials/form_errors', ['err_name' => 'phone'])
        </div>
    </div>
    @include('auth/account/partials/form_buttons')
</form>
<!--/ form profile -->
