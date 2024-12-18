<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'jenis_kelamin',
        'nomor_hp',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function biodata()
{
    return $this->hasMany(Biodata::class, 'user_id', 'id');
}
public function getStatusAttribute()
    {
        $today = Carbon::today();
        $hasMutabaahToday = $this->mutabaah->where('tanggal', $today)->count() > 0;
        return $hasMutabaahToday ? 'Active' : 'Non-Active';
    }
    public function mutabaah()
{
    return $this->hasMany(Mutabaah::class, 'user_id', 'id');
}
}
