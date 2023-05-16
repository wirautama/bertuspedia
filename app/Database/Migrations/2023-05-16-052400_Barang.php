<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
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
            'nama' => [
                'type' => 'TEXT',
            ],
            'harga' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'stok' => [
                'type' => 'int',
                'constraint' => 11
            ],
            'gambar' => [
                'type' => 'text'
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
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
