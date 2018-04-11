<div class="tab-pane active" id="profile">
    <!-- form profile -->
    <form class="panel form-horizontal form-bordered" name="form-profile" method="POST" action="{{route('account.update', ['scope' => 'profile'])}}">
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
            </div>

            <div class="form-group {{$errors->has('email') ? 'alert-danger' : ''}}">
                <label class="col-sm-3 control-label">@lang('auth.form.profile.field.email')</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="{{old('email') ?: $user->email}}" placeholder="Enter your real email" >
                </div>
            </div>

            <div class="form-group {{$errors->has('phone') ? 'alert-danger' : ''}}">
                <label class="col-sm-3 control-label">@lang('auth.form.profile.field.phone')</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="{{old('phone') ?: $user->phone}}" placeholder="Enter your real phone" >
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        @include('auth/account/partials/form_buttons')
    </form>
    <!--/ form profile -->
</div>