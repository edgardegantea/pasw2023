<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'nombreUsuario', 'contrasenia',
        'status', 'perfil'
    ];
}
