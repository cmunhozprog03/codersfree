<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    //Relação um a um
    public function description()
    {
        return $this->hasOne('App\Models\Description');
    }

    // Relação um para muitos inversa
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function plataform()
    {
        return $this->belongsTo('App\Models\Plataform');
    }

    // Relação muitos para muitos
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
