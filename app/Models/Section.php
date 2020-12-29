<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //relação um para muitos
    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }


    // Relação umpara muitos inversa
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
