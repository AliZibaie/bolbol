<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('edit-user', function (User $user) {
            return $user->is_admin;
        });
        Gate::define('create-user', function (User $user) {
            return $user->is_admin;
        });
        Gate::define('index-user', function (User $user) {
            return $user->is_admin;
        });
        Gate::define('show-user', function (User $user) {
            return $user->is_admin;
        });
    }
}
