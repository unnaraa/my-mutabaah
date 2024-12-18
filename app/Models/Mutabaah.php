<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mutabaah extends Model
{
    protected $table = 'mutabaah';
    protected $fillable = [
        'user_id',
        'tanggal',
        'surah_id',
        'ayat_mulai',
        'ayat_akhir',
        'juz',
        'status',
        'slug',
        'desc'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function surah()
    {
        return $this->belongsTo(Surah::class, 'surah_id', 'id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'mutabaah_id');
    }

    public function ripiu()
    {
        return $this->hasOne(Review::class, 'mutabaah_id');
    }
}