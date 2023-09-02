<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoUsuarioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'infousuario';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'usuario', 'nombre', 'apellidos',
        'fechaNac', 'sexo', 'foto', 'activo'
    ];
}
