<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table = 'review';
    
    protected $fillable = [
        'admin_id',
        'mutabaah_id',
        'respon'
    ];

    public function mutabaah()
    {
        return $this->belongsTo(Mutabaah::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}