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
        //
    }

    /**
     * Determine whether the user can create = users.
     *
     * @param \App\Models\User $authUser
     * @return boolean
     */
    public function create(User $authUser)
    {
        //
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
        if ($authUser->id === $user->id || $authUser->is_admin()) {
            // user can update himself
            return true;
        }
        return false;
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
    }
}
