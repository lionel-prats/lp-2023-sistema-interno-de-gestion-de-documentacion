<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FileSeeder extends Seeder
{
    public function run()
    {
        // belen - direccion
        File::create([
            'url' => 'direccion/belen-conforti/archivo-direccion-belen.jpg',
            'user_category_id' => 5
        ]);
        // belen - gerencia
        File::create([
            'url' => 'gerencia/belen-conforti/archivo-gerencia-belen.jpg',
            'user_category_id' => 6
        ]);

        // mariano diaz ojeda - administracion
        File::create([
            'url' => 'administracion/mariano-diaz-ojeda/archivo-administracion-marianodiazojeda.jpg',
            'user_category_id' => 10
        ]);
        // mariano diaz ojeda - gerencia
        File::create([
            'url' => 'gerencia/mariano-diaz-ojeda/archivo-gerencia-marianodiazojeda.jpg',
            'user_category_id' => 15
        ]);

        // lionel - sistemas
        File::create([
            'url' => 'sistemas/lionel-prats/archivo-sistemas-lionel.jpg',
            'user_category_id' => 36
        ]);

        // rodrigo - sistemas
        File::create([
            'url' => 'sistemas/rodrigo-turkowicz/archivo-sistemas-rodrigo.jpg',
            'user_category_id' => 54
        ]);

        // nelson - administracion
        File::create([
            'url' => 'administracion/nelson-mandela/archivo-administracion-nelson.jpg',
            'user_category_id' => 59
        ]);

        // melina - armado
        File::create([
            'url' => 'armado/melina-franzese/archivo-armado-melina.jpg',
            'user_category_id' => 64
        ]);

        // norma - atencion al cliente
        File::create([
            'url' => 'atencion-al-cliente/norma-martins/archivo-atencionalclientenorma.jpg',
            'user_category_id' => 65
        ]);

        // hernan M - datos
        File::create([
            'url' => 'datos/hernan-messina/archivo-datos-hernanmessina.jpg',
            'user_category_id' => 67
        ]);

        // matias - imprenta
        File::create([
            'url' => 'imprenta/matias-mazuchelli/archivo-imprenta-matias.jpg',
            'user_category_id' => 68
        ]);

        // juan pablo - prensa
        File::create([
            'url' => 'prensa/juan-pablo-toscano/archivo-prensa-juanpanblo.jpg',
            'user_category_id' => 72
        ]);
    }
}
