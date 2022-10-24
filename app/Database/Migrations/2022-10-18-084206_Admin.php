<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '16',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '16',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]
 
		]);
		$this->forge->addPrimaryKey('username', true);
		$this->forge->createTable('admin', true);
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
