<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    public function teachers()
    {
        return $this->hasMany('app\Models\teachers');
    }
    public function courses()
    {
        return $this->hasMany('app\Models\courses');
    }
}
