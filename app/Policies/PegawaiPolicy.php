<?php

namespace App\Policies;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PegawaiPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('manage_system');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pegawai $pegawai): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('manage_system');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pegawai $model): bool
    {
        return $user->can('manage_system');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pegawai $model): bool
    {
        return $user->can('manage_system');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pegawai $pegawai): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pegawai $pegawai): bool
    {
        return false;
    }
}
