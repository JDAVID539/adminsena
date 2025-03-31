<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    public function training_centers()
    {
        return $this->belongsTo('app\Models\training_centers');
    }
    public function areas()
    {
        return $this->belongsTo('app\Models\areas');
    }

    public function courses()
    {
        return $this->belongsToMany('app\Models\courses');
    }
}
