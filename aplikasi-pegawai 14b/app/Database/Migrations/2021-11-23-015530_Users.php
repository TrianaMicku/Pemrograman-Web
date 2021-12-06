<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        //buat skema table users
        $this->forge->addField([
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'namadepan' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'namabelakang' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ],
        ]);
        $this->forge->addPrimaryKey('username', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //untuk perintah drop table
        $this->forge->dropTable('users');
    }
}
