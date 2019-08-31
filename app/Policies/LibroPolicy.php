<?php

namespace App\Policies;

use App\User;
use App\Libro;
use Illuminate\Auth\Access\HandlesAuthorization;

class LibroPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any libros.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the libro.
     *
     * @param  \App\User  $user
     * @param  \App\Libro  $libro
     * @return mixed
     */
    public function view(User $user, Libro $libro)
    {
        //
    }

    /**
     * Determine whether the user can create libros.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the libro.
     *
     * @param  \App\User  $user
     * @param  \App\Libro  $libro
     * @return mixed
     */
    public function update(User $user, Libro $libro)
    {
        //
    }

    /**
     * Determine whether the user can delete the libro.
     *
     * @param  \App\User  $user
     * @param  \App\Libro  $libro
     * @return mixed
     */
    public function delete(User $user, Libro $libro)
    {
        //
    }

    /**
     * Determine whether the user can restore the libro.
     *
     * @param  \App\User  $user
     * @param  \App\Libro  $libro
     * @return mixed
     */
    public function restore(User $user, Libro $libro)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the libro.
     *
     * @param  \App\User  $user
     * @param  \App\Libro  $libro
     * @return mixed
     */
    public function forceDelete(User $user, Libro $libro)
    {
        //
    }
}
