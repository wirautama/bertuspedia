<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_barang' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_user' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'komentar' => [
                'type' => 'text',
            ],
            'created_by' => [
                'type' => 'int',
                'constraint' => 11
            ],
            'created_date' => [
                'type' => 'DATETIME'
            ],
            'updateb_by' => [
                'type' => 'int',
                'constraint' => 11,
                'null' => true
            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_user', 'user', 'id');
        $this->forge->addForeignKey('id_barang', 'barang', 'id');
        $this->forge->createTable('komentar');
    }

    public function down()
    {
        $this->forge->dropTable('komentar');
    }
}
