<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table = 'laporan';
    
    protected $fillable = [
        'judul',
        'isi_laporan',
        'slug'
    ];
}
