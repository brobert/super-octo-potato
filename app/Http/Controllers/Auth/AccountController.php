<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAuthUser;
use App\Http\Controllers\Controller;
use Auth;


class AccountController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return $this->respond();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $this->stash ['user'] = Auth::user();
        return $this->respond();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthUser $request, $scope)
    {
        $validated = $request->validated();

        $user = Auth::user();

        if ($scope === 'profile') {
            $data = $request->only([
                'name',
                'surname',
                'email',
                'phone'
            ]);
            $user->fill($data);
        } elseif ($scope === 'password') {
            // @TODO check if given old password is correct
            $user->fill([
                'password' => Hash::make($request->password)
            ]);
        } else {
            return redirect()->route('account.edit');
        }

        $user->save();

        return redirect()->route('account.edit')
            ->with([
            'scope' => $scope
        ]);
    }
}
