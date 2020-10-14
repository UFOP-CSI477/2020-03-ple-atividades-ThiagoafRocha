<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    protected $fillable = ['materia_id', 'tipo', 'descricao', 'data_entrega', 'nota'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
