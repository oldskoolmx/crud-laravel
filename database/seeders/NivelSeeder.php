<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos lo que necesitamos, creamos los niveles para la base de datos
        $niveles = ['PRIMERO','SEGUNDO','TERCERO','CUARTO','QUINTO','SEXTO'];
        foreach($niveles as $nivel){
        DB::table('niveles')->insert([
            'nombre' => $nivel
            ]);
        }
    }
}
