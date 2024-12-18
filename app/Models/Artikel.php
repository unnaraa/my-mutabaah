<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    
    protected $fillable = [
        'user_id',
        'sumber',
        'judul',
        'img',
        'link',
        'kategori'
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
