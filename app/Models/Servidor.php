<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servidor extends Model implements AuthenticatableContract {
    protected $table = 'administradores';
    protected $fillable = ['id', 'nome', 'cpf', 'data_nasc', 'senha'];
    public $timestamps = false;

    use Authenticatable;
}
