<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'name', 'email', 'phone', 'address', 'city', 'state', 'zip'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
