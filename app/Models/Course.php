<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    // Relação um para muitos
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }


    // Relação um para muitos inversa
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    public function Category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function Price()
    {
        return $this->belongsTo('App\Models\Price');
    }

    

    // Relação muitos para muitos inversa
    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
