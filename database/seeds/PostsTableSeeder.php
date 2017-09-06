<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
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

        // Génération de 25 Posts
        factory(App\Post::class, 2)->create()->each(function($post){
			
			$nbPictures = rand(1,8);

        	for($i=0; $i<=$nbPictures; $i++){

	        	$file = file_get_contents('http://lorempixel.com/1280/800/business/'.rand(0,10));

	        	$uri = str_random(12).'.jpg';

	        	File::put(public_path('images').'/'.$uri, $file);
	        	
	        	$post->pictures()->create([
	        		'link' => $uri,
	        	]);

        	}

        });
    }
}
