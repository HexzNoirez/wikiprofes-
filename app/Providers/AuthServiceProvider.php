<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
Use App\Models\User;
Use App\Models\Wikiprofe;
use App\Policies\WikiprofePolicy;
Use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Wikiprofe::class => WikiprofePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('update-post', function (User $user, Wikiprofe $wikiprofe) {
            return $user->id === $wikiprofe->user_id
            ? Response::allow()
            : Response::deny('No puedes editar este post, no es tuyo');
        });

        Gate::define('delete-post', function (User $user, Wikiprofe $wikiprofe) {
            return $user->id === $wikiprofe->user_id
            ? Response::allow()
            : Response::deny('No puedes eliminar este post, no es tuyo');
        });
    }
}
