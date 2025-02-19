<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['jumlah_rating'];

    public function Rating()
    {
        return $this->belongsTo(Rating::class, 'ratings_id');
    }
}
