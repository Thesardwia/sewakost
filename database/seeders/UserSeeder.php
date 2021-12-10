<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = ([
            [
                'name' => 'Thesar',
                'email' => 'thesardwi@gmail.com',
                'password' => bcrypt('1234567')
            ]
        ]);
        foreach($users as $user){
            User::create($user);
        }
    }
}
