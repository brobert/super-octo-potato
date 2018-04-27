<?php

namespace App\Policies;


use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Log;


class UserModelPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the = user.
     *
     * @param \App\Models\User $authUser
     * @param \App\Models\User $user
     * @return boolean
     */
    public function view(User $authUser, User $user)
    {
        // user can see himself or if is an admin user
        return $authUser->id === $user->id || $authUser->is_admin();
    }

    /**
     * Determine whether the user can create = users.
     *
     * @param \App\Models\User $authUser
     * @return boolean
     */
    public function create(User $authUser)
    {
        // Only admin can create new account
        return $authUser->is_admin();
    }

    /**
     * Determine whether the user can update the = user.
     *
     * @param \App\Models\User $authUser
     * @param \App\Models\User $user
     * @return boolean
     */
    public function update(User $authUser, User $user)
    {
        // user can update himself or if is an admin user
        return $authUser->id === $user->id || $authUser->is_admin();
    }

    /**
     * Determine whether the user can delete the = user.
     *
     * @param \App\Models\User $authUser
     * @param \App\Models\User $user
     * @return boolean
     */
    public function delete(User $authUser, User $user)
    {
        // Only admin can create new account
        return $authUser->is_admin();
    }
}
