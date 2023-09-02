<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        // Deshabilita el chequeo de claves foráneas
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'            => [
                'type'          => 'int', 
                'constraint'    => 11, 
                'auto_increment'=> true, 
                'unsigned'      => true
            ],
            'nombreUsuario' => [
                'type'          => 'varchar', 
                'constraint'    => 30,
                'unique'        => true
            ],
            'contrasenia'   => [
                'type'          => 'varchar', 
                'constraint'    => 200
            ],
            'status'        => [
                'type'          => 'boolean', 
                'default'       => true
            ],
            'perfil'        => [
                'type'          => 'int', 
                'constraint'    => 11,
                'unsigned'      => true,
                'auto_increment'=> false
            ]
        ]);

        $this->forge->addKey('id', true);
        // Agregar clave foránea de perfil
        $this->forge->addForeignKey('perfil', 'perfiles', 'id');
        $this->forge->createTable('usuarios', true);

        // Habilitar chequeo de claves foráneas
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('usuarios', true);
    }
}
