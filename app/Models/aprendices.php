<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aprendices extends Model
{
    public function computers()
    {
        return $this->belongsTo('app\Models\computers');
    }
    
    public function courses()
    {
        return $this->belongsTo('app\Models\courses');
    }
}
