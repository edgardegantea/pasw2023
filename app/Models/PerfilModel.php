<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfilModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'perfiles';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'nombrePerfil', 'descripcion', 'status'
    ];
}
