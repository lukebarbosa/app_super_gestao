<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_contato',
        'mensagem'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    function getMotivoContato()
    {
        return match ($this->motivo_contato) {
            1 => "Duvida",
            2 => "Elogio",
            3 => "Reclamacao",
        };
    }
}
