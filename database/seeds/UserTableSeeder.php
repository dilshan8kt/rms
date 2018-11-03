<?php

use Illuminate\Database\Seeder;
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
        $user = new User();
        $user->first_name = 'Tharindu';
        $user->last_name = 'Dilshan';
        $user->phone_no = '0774586759';
        $user->email = 'dilshan@gmail.com';
        $user->password = bcrypt('12345');
        $user->status = 1;
        $user->save();
    }
}
