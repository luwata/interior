<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$allFiles = File::allFiles(public_path('images'));

    	foreach ($allFiles as $file) {
    		File::delete($file);
    	}

        //
        factory(App\User::class, 3)->create()->each(function($user){

        	$file = file_get_contents('http://lorempixel.com/400/300/people/'.rand(0,10));

        	$uri = str_random(8).'.jpg';

        	File::put(public_path('images').'/'.$uri, $file);
        	
        	$user->pictures()->create([
        		'link' => $uri,
        	]);
        });

        DB::table('users')->insert([
       		[
       			'username' => 'admin',
       			'email' => 'admin@admin.fr',
       			'role' => 'administrator',
       			'password' => Hash::make('admin'),
                'remember_token' => str_random(10),
       		],
          [
            'username' => 'editor',
            'email' => 'editor@editor.fr',
            'role' => 'editor',
            'password' => Hash::make('editor'),
                'remember_token' => str_random(10),
          ],
        	[
          	'username' => 'eres',
          	'email' => 'contact@eres.com',
          	'role' => 'customer',
          	'password' => Hash::make('eres'),
              'remember_token' => str_random(10),
        	],
       	]);


    }
}
