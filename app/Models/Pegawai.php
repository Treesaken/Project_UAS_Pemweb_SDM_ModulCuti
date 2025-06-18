<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'nip',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'telpon',
        'alamat',
        'divisi_id'
    ];

    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';


    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}
