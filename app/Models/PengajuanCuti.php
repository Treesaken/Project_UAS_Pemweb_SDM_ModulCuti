<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Penting untuk di-import

class PengajuanCuti extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_cutis';
    protected $fillable = [
        'tanggal_awal',
        'tanggal_akhir',
        'jumlah',
        'ket',
        'status',
        'pegawai_nip',
    ];

    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_nip', 'nip');
    }
}
