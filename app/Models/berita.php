<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'image', 'slug'];

    // Membuat slug otomatis saat menyimpan data
    public static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            $news->slug = Str::slug($news->judul);
        });

        static::updating(function ($news) {
            $news->slug = Str::slug($news->judul);
        });
    }
}
