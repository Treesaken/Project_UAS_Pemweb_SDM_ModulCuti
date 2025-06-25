<?php

namespace App\Providers;

// PERBAIKAN PENTING: Pastikan Anda mewarisi kelas yang benar
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // Daftarkan semua policy Anda di sini
        \App\Models\Pegawai::class => \App\Policies\PegawaiPolicy::class,
        \App\Models\Divisi::class => \App\Policies\DivisiPolicy::class,
        \App\Models\JatahCuti::class => \App\Policies\JatahCutiPolicy::class,
        \App\Models\PengajuanCuti::class => \App\Policies\PengajuanCutiPolicy::class,
    
        // Pendaftaran untuk menu Admin Management
        \App\Models\User::class => \App\Policies\UserPolicy::class, 
        \Spatie\Permission\Models\Role::class => \App\Policies\RolePolicy::class,
        \Spatie\Permission\Models\Permission::class => \App\Policies\PermissionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Method ini akan secara otomatis mendaftarkan policies di atas
    }
}
