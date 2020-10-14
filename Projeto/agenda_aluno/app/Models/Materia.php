<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'nome', 'atividade_id', 'faltas'];

    public function exercicios(){
        return $this->hasMany(Atividade::class);
    }

    //public function users(){
    //    return $this->hasMany(User::class);
    //}
}
