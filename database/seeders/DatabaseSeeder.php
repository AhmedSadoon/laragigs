<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\listing;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(5)->create();

        $user=User::factory()->create([
            'name'=>'ahmed',
            'email'=>'a@a.com'
        ]);
         listing::factory(6)->create([
             'user_id'=>$user->id
         ]);
    }
}
