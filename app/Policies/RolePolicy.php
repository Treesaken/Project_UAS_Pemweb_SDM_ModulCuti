<?php
namespace App\Policies;
use App\Models\User;

class RolePolicy
{
    public function viewAny(User $user): bool { return $user->can('manage-system'); }
    public function create(User $user): bool { return $user->can('manage-system'); }

    // Menggunakan nama kelas Spatie yang lengkap dan benar
    public function update(User $user, \Spatie\Permission\Models\Role $model): bool 
    { 
        return $user->can('manage-system'); 
    }

    public function delete(User $user, \Spatie\Permission\Models\Role $model): bool 
    { 
        return $user->can('manage-system'); 
    }
}