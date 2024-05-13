<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Wikiprofe;
use Illuminate\Auth\Access\Response;

class WikiprofePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Wikiprofe $wikiprofe): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Wikiprofe $wikiprofe): Response
    {
        return $user->id === $wikiprofe->user_id
            ? Response::allow()
            : Response::deny('No puedes editar este post, no es tuyo');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Wikiprofe $wikiprofe): Response
    {
        return $user->id === $wikiprofe->user_id 
            ? Response::allow()
            : Response::deny('No puedes eliminar este post, no es tuyo');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Wikiprofe $wikiprofe): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Wikiprofe $wikiprofe): bool
    {
        //
    }
}
