<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
        $model->insert([
            'username' => 'sigit',
            'useremail' => 'sigit@gmail.com',
            'userpassword' => password_hash('sigit123', PASSWORD_DEFAULT),
        ]);

	}
}
