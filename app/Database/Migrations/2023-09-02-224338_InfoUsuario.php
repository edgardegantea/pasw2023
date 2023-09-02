<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfoUsuario extends Migration
{
    public function up()
    {
        // Deshabilita el chequeo de claves foráneas
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'usuario'   => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => false
            ],
            'nombre'    => ['type' => 'varchar', 'constraint' => 50],
            'apellidos' => ['type' => 'varchar', 'constraint' => 80],
            'fechaNac'  => ['type' => 'date'],
            'sexo'      => ['type' => 'varchar', 'constraint' => 1, 'default' => 'f'],
            'foto'      => ['type' => 'varchar', 'constraint' => 255, 'nullable' => true],
            'activo'    => ['type' => 'boolean', 'default' => true]
        ]);

        $this->forge->addKey('usuario', true);
        $this->forge->addForeignKey('usuario', 'usuarios', 'id');
        $this->forge->createTable('infousuario', true);

        // Habilitar chequeo de claves foráneas
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('infousuario', true);
    }
}
