<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FichaCatalografica extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $fillable = ['cutter', 'classificacao', 'autor', 'titulo', 'subtitulo', 'local', 'ano', 'folhas', 'ilustracao'];

    public function tcc(){
        return $this->hasOne('App\Models\Tcc');
    }

    public function tese(){
        return $this->hasOne('App\Models\Tese');
    }

    public function palavra_chave(){
        return $this->hasMany('App\Models\PalavraChave');
    }

    public function monografia(){
        return $this->hasOne('App\Models\Monografia');
    }

    /**
     * Get the requisicaoDocumento associated with the FichaCatalografica
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function requisicaoDocumento(): HasOne
    {
        return $this->hasOne(Requisicao_documento::class);
    }
}
