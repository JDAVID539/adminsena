<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computers extends Model
{
    public function aprenddices()
    {
        return $this->hasOne('app\Models\aprenddices');
    }
}
