<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\User' => 'App\Policies\UserManagementPolicy',
        'App\Models\Roles' => 'App\Policies\RoleManagementPolicy',
        'App\Models\Quotes' => 'App\Policies\ContentManagementPolicy',
        'App\Models\Product' => 'App\Policies\ContentManagementPolicy',
        'App\Models\Slideshow' => 'App\Policies\ContentManagementPolicy',
        'App\Models\Profile' => 'App\Policies\ContentManagementPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
