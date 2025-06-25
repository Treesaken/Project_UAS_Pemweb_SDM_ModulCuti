<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Penting untuk di-import

class JatahCuti extends Model
{
    use HasFactory;
    protected $table = 'jatah_cutis';
    protected $fillable = [
        'tahun',
        'jumlah',
        'nip',
    ];
    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
