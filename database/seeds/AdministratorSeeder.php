<?php

use Illuminate\Database\Seeder;
use App\User;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create( [
            'email' => Config::get('dagorret.administrator.email'),
            'password' => Hash::make( Config::get('dagorret.administrator.password') ),
            'name' => Config::get('dagorret.administrator.name'),
        ] );
        $user->assignRole('administrator');
    }
}
