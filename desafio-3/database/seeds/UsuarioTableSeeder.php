<?php

use Illuminate\Database\Seeder;
use App\Usuario;
class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([

            'nome' =>'Celso da Silva Couto Junior ',
            'email' =>'juniorcoutodf@gmail.com',
            'dataNascimento' =>'1987-01-01',
            'senha' => bcrypt('123456'),
        ]);
    }
}
