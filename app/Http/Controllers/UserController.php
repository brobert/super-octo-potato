<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Models\User;


class UserController extends Controller
{

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->resource = new UserResource(new User());
    }

    public function index(Request $request)
    {
        $this->stash ['query'] = $request->query();
        $this->stash ['users'] = $this->resource->get_users_list($request);
        return $this->respond();
    }

    public function edit(Request $request, $id)
    {
        $this->stash ['user'] = $this->resource->get_user($request, $id);
        return $this->respond('auth.account.edit');
    }

    public function update(Request $request, $id)
    {
        return $this->respond();
    }

    public function destroy(Request $request, $id)
    {
        $this->resource->delete_user($request, $id);
        return back();
    }
}
