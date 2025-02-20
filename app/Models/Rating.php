<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['jumlah_rating', 'users_id', 'ratings_id'];


    public function User()
    {
        return $this->hasMany(User::class, 'users_id');
    }

    public function Rating()
    {
        return $this->hasMany(Rating::class, 'ratings_id');
    }
}
