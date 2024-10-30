<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, mixed $cpf)
 */
class Usuario extends Model implements AuthenticatableContract
{
    protected $table = 'usuarios';
    protected $fillable = ['id', 'cpf', 'nome', 'data_nascimento'];
    public $timestamps = false;

    use Authenticatable;
}
