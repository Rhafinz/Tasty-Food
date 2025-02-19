<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Resep extends Model
{
    use HasFactory;
    protected $fillable = ['nama_resep', 'deskripsi', 'bahan', 'langkah', 'gambar', 'users_id', 'ratings_id', 'slug'];

    public function User()
    {
        return $this->hasMany(User::class, 'users_id');
    }

    public function Rating()
    {
        return $this->hasMany(Rating::class, 'ratings_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($resep) {
            $resep->slug = Str::slug($resep->judul);
        });

        static::updating(function ($resep) {
            $resep->slug = Str::slug($resep->judul);
        });
    }
}
