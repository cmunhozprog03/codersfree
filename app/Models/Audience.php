<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;

    // Relação umpara muitos inversa
    public function course()
    {
        return $this->belongsTo('App\Models|Course');
    }
}