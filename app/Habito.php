<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habito extends Model
{
    protected $fillable = ['nome', 'descricao', 'tp_habito', 'dt_inicio_ctrl', 'objetivo'];

    public function historico(){
        return $this->hasMany('App\Historico');
    }
}
