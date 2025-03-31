<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class training_centers extends Model
{
    public function courses()
    {
        return $this->hasMany('app\Models\courses');
    }
    
    public function teachers()
    {
        return $this->hasMany('app\Models\teachers');
    }
}
