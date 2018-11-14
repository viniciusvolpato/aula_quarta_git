<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $fillable = ['data', 'hora', 'habito_id'];

    public function habito(){
        return $this->belongsTo('App\Habito');
    }
}
