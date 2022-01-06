<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContentManagementPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewAny()
    {
      // return 1;
      return RoleAuthoration('cm-view');
    }


    public function view()
    {
        return RoleAuthoration('cm-view');
    }

    public function create()
    {
        return RoleAuthoration('cm-create');
    }

    public function update()
    {
      return RoleAuthoration('cm-update');
    }

    public function delete()
    {
      return RoleAuthoration('cm-delete');
    }
}
