<?php
use Illuminate\Database\Seeder;
class CreateUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user',
            'email' => 'user@admin.com',
            'password' => bcrypt(87654321),
        ]);
    }
}