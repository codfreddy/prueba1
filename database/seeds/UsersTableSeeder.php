<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        // 	'first_name'=>'Joe',
        // 	'last_name'=>'Joe',
        // 	'email'=>'Joe@gmail.com',
        // 	'password'=>bcrypt('secret'),
        // 	'remember_token' => str_random(10)
        // 	]);
        User::truncate();
        Post::truncate();
        
   //      factory(App\User::class,10)->create()->each(function($user){
			
			// $post=factory(App\Post::class)->make();
   //      	$post1=factory(App\Post::class)->make();
   //      	$post3=factory(App\Post::class)->make();
   //      	$user->posts()->save($post);
   //      	$user->posts()->save($post1);
   //      	$user->posts()->save($post3);
        	
   //      });
        for ($k=0; $k <20 ; $k++) { 
            $usuarios1 =factory(App\User::class)->create();
            // $usuarios =factory(App\User::class,20)->create();
            $faker = Faker\Factory::create();
            $usuarios = User::pluck('id')->All();
            for($i=1;$i<=5;$i++) {
                $post3=factory(App\Post::class)->create(['autor_id' => $faker->randomElement($usuarios)]);
                //$usuarios->posts()->save($post);
                // Post::create([
                //     'title'=>$faker->sentence(),
                //     'body'=>$faker->paragraph(),
                //     'autor_id' => $faker->randomElement($usuarios)
                // ]);
            }
        }
        
    }
}
