<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory; 
use App\Models\Product;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
    	foreach(range(1, 7) as $index) {
    		$user = new User();
    		$user->user_id = '001' . $faker->md5;
    		$user->name = $faker->name;
    		$user->email = $faker->email;
    		$user->password = encrypt('1234');
    		$user->save();

    		$c = new Category();
    		$c->c_id = '003' . $faker->md5;
            $c->c_name = $faker->name;
    		$c->cover_photo = $faker->imageUrl($width = 640, $height = 480, 'technics', true);
    		$c->save();

    		foreach(range(1, 10) as $index){
    			$sc = new SubCategory();
    			$sc->sc_id = '004' . $faker->md5;
    			$sc->sc_name = $faker->name;
    			$sc->sc_c_id = $c->c_id;
    			$sc->save();

    			$p = new Product();
    			$p->p_id = '002' . $faker->md5;
    			$p->title = $faker->name;
    			$p->content = $faker->realText($maxNbChars = 500, $indexSize = 2);
                $p->photo = $faker->imageUrl($width = 640, $height = 480, 'technics', true);
    			$p->price = $faker->numberBetween($min = 100, $max = 1000);
    			$p->p_user_id = $user->user_id;
    			$p->p_sub_c_id = $sc->sc_id;
    			$p->save();

    		}


    	}
    }
}
