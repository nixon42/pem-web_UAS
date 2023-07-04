<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCustomerAndInet extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'customer_name' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255, // increased constraint for email field
            ],
            'inet' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addForeignKey('inet', 'inets', 'inet_id');
        $this->forge->addKey('inet'); // added index to the 'inet' field
        $this->forge->addPrimaryKey('customer_id');
        $this->forge->createTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
