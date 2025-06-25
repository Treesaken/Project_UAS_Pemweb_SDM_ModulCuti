<?php
namespace App\Policies;
use App\Models\User;

class PermissionPolicy
{
    public function viewAny(User $user): bool { return $user->can('manage-system'); }
    public function create(User $user): bool { return $user->can('manage-system'); }

    // PERBAIKAN: Gunakan nama kelas yang lengkap di sini
    public function update(User $user, \Spatie\Permission\Models\Permission $model): bool 
    { 
        return $user->can('manage-system'); 
    }

    public function delete(User $user, \Spatie\Permission\Models\Permission $model): bool 
    { 
        return $user->can('manage-system'); 
    }
}