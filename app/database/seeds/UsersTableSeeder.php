<?php
class UsersTableSeeder extends Seeder {
	
	public function run(){
		DB::table('users')->delete();
		$users =[
		 [
		"username" => "admin",
		"email" => "chacha@chacha.co.ke",
		'confirmed' => 1,
		"password" => Hash::make("chacha"),
		"confirmation_code" => md5(microtime().Config::get('app.key')),
		"created_at" => new DateTime,
		"updated_at" => new DateTime
		
		]
		];
		DB::table('users')->insert($users);
	}
}