<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Headers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'file_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'file_path' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // Define the primary key
        $this->forge->addKey('id', true);

        // Create the `settings` table
        $this->forge->createTable('headers', true);
    }

    public function down()
    {
        $this->forge->dropTable('headers', true);
    }
}
