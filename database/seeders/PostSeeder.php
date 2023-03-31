<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//
		Post::updateorcreate([
			'title' => 'Languages',
			'description' => 'php , java ,c++',
			'user_id' => '1',

		]);

	}
}
