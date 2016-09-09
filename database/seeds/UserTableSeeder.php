<?php

use Illuminate\Database\Seeder;

//added
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add 20 fake users to my user table
        factory(User::class, 20)->create();
    }
}
