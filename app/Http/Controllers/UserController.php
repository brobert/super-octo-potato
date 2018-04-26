<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Log;


class UserController extends Controller
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->resource = new UserResource(new User());
    }

    public function index(Request $request)
    {
        $this->stash ['users'] = $this->resource->get_users_list($request);

        return $this->respond();
    }

    public function edit(Request $request, $id)
    {
        $this->stash ['user'] = $this->resource->get_user($request, $id);
        $this->stash ['routeName'] = 'user.update';
        return $this->respond('auth.account.edit');
    }

    public function update(UpdateUserRequest $request, $id, $scope)
    {
        $validated = $request->validated();

        Log::debug('-----------------------------------------------UserController::update' . print_r(array_keys($request->rules()), TRUE));

        $data = $request->only(array_keys($request->rules()));

        if ($scope === 'password') {
            $data = [
                'password' => Hash::make($request->password)
            ];
        }

        $user = User::find($id);
        $user->fill($data);
        $user->save();

        return redirect()->route('user.edit', [
            'id' => $id
        ])
            ->with([
            'scope' => $scope
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $this->resource->delete_user($request, $id);
        return back();
    }
}
