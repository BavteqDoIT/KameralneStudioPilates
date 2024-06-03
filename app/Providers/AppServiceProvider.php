<?php

namespace App\Providers;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        $this->defineUserRoleGate('isAdmin',UserRole::ADMIN);
        $this->defineUserRoleGate('isUser',UserRole::USER);
        $this->defineUserRoleGate('isWorker',UserRole::WORKER);
    }

    private function defineUserRoleGate(string $name, string $role): void{
        Gate::define($name, function(User $user) use ($role){
            return $user -> role == $role;
        });
    }
}
