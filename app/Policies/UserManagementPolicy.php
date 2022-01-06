<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserManagementPolicy
{
    use HandlesAuthorization;

    public function viewAny()
    {
        //
        return RoleAuthoration('um-view');
    }


    public function view()
    {
        //
        return RoleAuthoration('um-view');
    }


    public function create()
    {
        //
        return RoleAuthoration('um-create');
    }


    public function update()
    {
        //
        // return true;
        return RoleAuthoration('um-update');
    }


    public function delete()
    {
        //
        return RoleAuthoration('um-delete');
    }

    public function restore()
    {
        //
    }


    public function forceDelete(User $user, User $model)
    {
        //
    }
}
