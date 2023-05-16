<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
            'username' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'salt' => [
                'type' => 'text'
            ],
            'avatar' => [
                'type' => 'text'
            ],
            'role' => [
                'type' => 'int',
                'constraint' => 1,
                'default' => 1
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
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
