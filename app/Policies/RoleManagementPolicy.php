<?php

namespace App\Policies;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoleManagementPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
      return RoleAuthoration('rm-view');
    }


    public function view()
    {
        return RoleAuthoration('rm-view');
    }


    public function create(User $user)
    {
        return RoleAuthoration('rm-create');
    }


    public function update()
    {
      return RoleAuthoration('rm-update');
    }


    public function delete()
    {
      return RoleAuthoration('rm-delete');
    }


    public function restore()
    {
        //
    }


    public function forceDelete(User $user, Roles $roles)
    {
        //
    }
}
