<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const LIKE = 1;
    const DISLIKE = 2;

    // Relação um para muitos inversa
    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }


    // Relação poliformica
    public function reactioable()
    {
        return $this->morphTo();
    }
}
