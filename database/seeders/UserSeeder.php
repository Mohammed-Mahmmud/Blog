<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//
		User::updateorcreate(['name' => 'Rana'], [
			'name' => 'Rana',
			'email' => 'rana@mail.com',
			'password' => Hash::make('123456789'),

		]);

	}
}
