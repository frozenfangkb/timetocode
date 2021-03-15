<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const DRAFT = 1;
    const IN_REVIEW = 2;
    const PUBLISHED = 3;

    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\Users');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }
}
