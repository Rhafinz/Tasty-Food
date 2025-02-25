<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Resep extends Model
{
    use HasFactory;
    protected $fillable = ['nama_resep', 'deskripsi', 'bahan', 'langkah', 'gambar', 'slug'];

    public function Ratings()
    {
        return $this->hasMany(Rating::class, 'reseps_id');
    }

    public function averageRating()
    {
        return $this->ratings()->avg('jumlah_rating') ?? 0;
    }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($recipe) {
            $recipe->slug = Str::slug($recipe->nama_resep);
        });

        static::updating(function ($recipe) {
            $recipe->slug = Str::slug($recipe->nama_resep);
        });

        static::deleting(function ($resep) {
            $resep->ratings()->delete(); // Menghapus semua rating terkait sebelum resep dihapus
        });
    }
}

