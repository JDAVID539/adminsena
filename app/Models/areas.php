<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    public function teachers()
    {
        return $this->hasMany('app\Models\teachers');
    }
    public function cources()
    {
        return $this->hasMany('app\Models\cources');
    }
}
