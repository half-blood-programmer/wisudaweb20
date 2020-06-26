<?php

use App\Http\Controllers\UsersController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        //for ($i = 3; $i < 5; $i++) {
        DB::table('users')->insert([
        'name' => $faker->name($gender = null),
        'npm' => mt_rand(1000000000, 2000000000),
        'email' => $faker->email,
        'password' => Hash::make('password'),
        'id_level' => 1,
        'kelas' => mt_rand(300,500),
        // 'prodi = $faker->sentence($array = array('D III Akuntansi','D III Pajak','D III PBB  / Penilai', 'D III Bea Cukai','D III Kebendaharaan Negara','D III Maanajemen Aset');
        'prodi' => 'D III Akuntansi',
        'id_level' => 1,
        'status' => 0,
        ]);
        //}
    }
}
