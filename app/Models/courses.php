<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public function aprendices() {
        return $this->hasMany('App\Models\Aprendices');
    }
    public function training_centers()
    {
        return $this->belongsTo('App\Models\training_centers'); // Cambiado a 'App\Models\training_centers'
    }

    public function areas()
    {
        return $this->belongsTo('App\Models\areas'); // Cambiado a 'App\Models\areas'
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Models\teachers'); // Cambiado a 'App\Models\teachers'
    }
}
