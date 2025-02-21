<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['jumlah_rating', 'users_id', 'reseps_id'];


    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function Resep()
    {
        return $this->belongsTo(Resep::class, 'reseps_id');
    }
}
