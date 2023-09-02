<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perfil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'          => 'int', 
                'constraint'    => 11, 
                'auto_increment'=> true, 
                'unsigned'      => true
            ],
            'nombrePerfil'  => [
                'type'          => 'varchar',
                'constraint'    => 30
            ],
            'descripcion'   => [
                'type'          => 'varchar',
                'constraint'    => 100,
                'nullable'      => true
            ],
            'status'        => [
                'type'          => 'boolean', 
                'default'       => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('perfiles', true);
    }

    public function down()
    {
        $this->forge->dropTable('perfiles', true);
    }
}
