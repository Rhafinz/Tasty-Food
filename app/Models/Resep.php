<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Resep extends Model
{
    use HasFactory;
    protected $fillable = ['nama_resep', 'deskripsi', 'bahan', 'langkah', 'gambar', 'slug'];

    public function Resep()
    {
        return $this->belongsTo(Resep::class, 'reseps_id');
    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($resep) {
            $resep->slug = Str::slug($resep->nama_resep);
        });

        static::updating(function ($resep) {
            $resep->slug = Str::slug($resep->nama_resep);
        });
    }
}

