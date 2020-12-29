<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

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

    // Relação um a um poliformica
    public function resource()
    {
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    // Relação um para muitos poliformicas
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions()
    {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
