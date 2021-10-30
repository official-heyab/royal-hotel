<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('can_view_room_reservations', function(User $user){
            return $user->role_id == Role::IS_ADMIN;
        });

        Gate::define('can_view_conference_hall_reservations', function(User $user){
            return $user->role_id == Role::IS_ADMIN;
        });

        Gate::define('can_view_service_reservations', function(User $user){
            return $user->role_id == Role::IS_ADMIN;
        });

        Gate::define('can_view_food_menu', function(User $user){
            return $user->role_id == Role::IS_ADMIN;
        });

        Gate::define('can_view_services', function(User $user){
            return $user->role_id == Role::IS_ADMIN;
        });

        Gate::define('can_view_rooms', function(User $user){
            return $user->role_id == Role::IS_ADMIN;
        });

        Gate::define('can_view_conference_halls', function(User $user){
            return $user->role_id == Role::IS_ADMIN;
        });

        Gate::define('can_view_users', function(User $user){
            return $user->role_id == Role::IS_ADMIN;
        });


        Gate::define('can_view_menu_reservations', function(User $user){
            return ($user->role_id == Role::IS_CHEF
            || $user->role_id == Role::IS_ADMIN);
        });

        Gate::define('can_view_beauty_salon_reservations', function(User $user){
            return ($user->role_id == Role::IS_BEAUTY_SALON_MANAGER
            || $user->role_id == Role::IS_ADMIN);
        });

        Gate::define('can_view_gym_reservations', function(User $user){
            return ($user->role_id == Role::IS_WELLNESS_MANAGER
            || $user->role_id == Role::IS_ADMIN);
        });

        Gate::define('can_view_swimming_pool_reservations', function(User $user){
            return ($user->role_id == Role::IS_WELLNESS_MANAGER
            || $user->role_id == Role::IS_ADMIN);
        });

        Gate::define('can_view_laundry_reservations', function(User $user){
            return ($user->role_id == Role::IS_LAUNDRY_MANAGER
            || $user->role_id == Role::IS_ADMIN);
        });

        Gate::define('can_view_personal_trainer_reservations', function(User $user){
            return ($user->role_id == Role::IS_PERSONAL_TRAINER||
            $user->role_id == Role::IS_ADMIN);
        });

        Gate::define('can_view_dinner_table_reservations', function(User $user){
            return ($user->role_id == Role::IS_CHEF ||
            $user->role_id == Role::IS_ADMIN);
        });
    }
}
