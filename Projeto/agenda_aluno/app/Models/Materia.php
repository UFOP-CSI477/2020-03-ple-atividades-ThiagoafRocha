<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'nome', 'user_id', 'faltas'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function atividades(){
        return $this->hasMany(Atividade::class);
    }
}
