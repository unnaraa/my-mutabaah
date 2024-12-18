<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = 'informasi';
    
    protected $fillable = [
        'judul',
        'isi',
        'tanggal_mulai',
        'tanggal_berakhir'
    ];
}
