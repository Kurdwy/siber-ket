<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'namaLengkap'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tempatLahir'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tanggalLahir'       => [
				'type'           => 'DATETIME',
			],
			'jenisKelamin' => [
				'type'           => 'VARCHAR',
                'constraint'     => '255',
			],
			'nik' => [
				'type'           => 'VARCHAR',
                'constraint'     => '255',
			],
			'password' => [
				'type'           => 'VARCHAR',
                'constraint'     => '255',
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
		$this->forge->addPrimaryKey('nik', true);
		$this->forge->createTable('member', true);
    }

    public function down()
    {
        $this->forge->dropTable('member');
    }
}
