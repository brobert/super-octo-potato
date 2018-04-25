@if (isset($err_name) && $err_name)
<div class="col-sm-12 alert">
    <ul>
        @foreach ($errors->get($err_name) as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@elseif ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif