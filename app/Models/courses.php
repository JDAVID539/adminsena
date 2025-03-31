<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public function aprendices()
    {
        return $this->hasMany('app\Models\aprendices');
    }

    public function training_centers()
    {
        return $this->belongsTo('app\Models\training_centers');
    }

    public function areas()
    {
        return $this->belongsTo('app\Models\areas');
    }

    public function teachers()
    {
        return $this->belongsToMany('app\Models\teachers');
    }
}
