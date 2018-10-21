<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
    	DB::table('users')->delete();
    	$perfil = ['Usuario', 'Administrador'];
    	for ($i=0; $i < 10; $i++) { 
    	
	        DB::table('users')->insert([
	            'nombre' => str_random(50),
	            'perfil' => $perfil[rand(0,1)],
	            'ciudad' => str_random(50),
	            'usuario' => str_random(20),
	            'correo' => str_random(10).'@'.str_random(6).'.'.str_random(3),
	            'clave' => bcrypt('123456'),
	            'pasatiempos' => str_random(200),
	            
	        ]);
        }
    }
}