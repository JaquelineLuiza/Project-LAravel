<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados = [
        'name'=>'Jaqueline',
        'email'=>'jaquelineluiza4444@gmail.com',
        'password'=>bcrypt('123456'),
      ];
      if (User::where('email', '=',$dados['email'])->count()){
        $usuario = User::where('email', '=',$dados['email'])->firts();
        $usuario->update($dados);
        echo "Usuario alterado";
      }else{
        User::create($dados);
        echo "Usuario criado";
      }
    }
}
