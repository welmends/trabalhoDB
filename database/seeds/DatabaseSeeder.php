<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeed::class);
        $this->call(PecaSeed::class);
        $this->call(ComentarioSeed::class);
    }
}
