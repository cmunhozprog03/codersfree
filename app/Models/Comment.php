<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Relação poliformica
    public function commentable()
    {
        return $this->morphTo();
    }

    // Relação um para muitos polifirmica
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }


    // Relação um para muitos inversa
    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function reactions()
    {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
