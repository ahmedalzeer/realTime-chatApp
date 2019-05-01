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
        \App\User::create([
            'name'  => 'ahmed',
            'email'  => 'ahmed@a.com',
            'password'  => bcrypt('12345678'),
        ]);
        \App\User::create([
            'name'  => 'hady',
            'email'  => 'hady@a.com',
            'password'  => bcrypt('12345678'),
        ]);
        \App\User::find(2)->messages()->create([
            'body'  => 'hi ,how are you',
        ]);
        \App\User::find(1)->messages()->create([
            'body'  => 'hi ,fine thank\'s',
        ]);
    }
}
