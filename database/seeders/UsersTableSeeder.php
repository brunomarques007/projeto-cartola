<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Bruno Marques',
            'email' => 'bruno.marques@zoop.com.br',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'times' => json_encode(array('bayern_de_moleque', 'matador_de_urubu')),
            'contatos' => '21999767171',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
