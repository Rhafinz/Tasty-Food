<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['users_id', 'subject', 'name', 'email', 'message', 'rating'];

    public function User()
    {
        return $this->hasMany(User::class, 'users_id');
    }
}
