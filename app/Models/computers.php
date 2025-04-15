<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computers extends Model
{
    public function aprendices()
    {
        return $this->hasOne('app\Models\Aprendices');
    }
}
