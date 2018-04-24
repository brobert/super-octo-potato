<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(Request $request) {
        parent::__construct($request);

        $this->resource = new UserResource(new User());
    }
    public function index(Request $request)
    {

        $this->stash['users'] = $this->resource->get_users_list($request);
        return $this->respond();
    }

    public function edit(Request $request, $id)
    {
        return $this->respond();
    }

    public function update(Request $request, $id)
    {
        return $this->respond();
    }
}
