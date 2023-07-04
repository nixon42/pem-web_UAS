<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddInet extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'inet_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'inet_name' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'inet_price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2', // 10 digits with 2 decimal places
            ],
        ]);

        $this->forge->addKey('inet_id', true);
        $this->forge->createTable('inets');
    }

    public function down()
    {
        $this->forge->dropTable('inets');
    }
}
