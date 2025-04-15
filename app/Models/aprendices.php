<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendices extends Model
{
    public function computers()
    {
        return $this->belongsTo('App\Models\computers');
    }
    
    public function courses()
    {
        return $this->belongsTo('App\Models\courses');
    }
}
