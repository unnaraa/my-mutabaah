<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';
    
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'umur',
        'alamat',
        'nomor_hp',
        'nama_ayah',
        'nama_ibu',
        'kelas',
        'foto'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
