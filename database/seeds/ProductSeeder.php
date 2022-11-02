<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // headset seeder (4)
         DB::table('products')->insert([
            'nama' => 'Rexus Thundervox HX9',
            'gambar' => 'rexushx9.png',
            'liga_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Barracuda Pro',
            'gambar' => 'razerbarracudapro.jpg',
            'liga_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech Iris HG19',
            'gambar' => 'fantechiris.jpg',
            'liga_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'Asus ROG Delta S Animate',
            'gambar' => 'roggdeltas.jpg',
            'liga_id' => '4',
        ]);

    
        // mouse seeder (4)
        DB::table('products')->insert([
            'nama' => 'Rexus Sierra X8',
            'gambar' => 'rexussierrax8.jpg',
            'liga_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Naga',
            'gambar' => 'razernaga.jpg',
            'liga_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech X11',
            'gambar' => 'fantechx11.jpg',
            'liga_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'ROG Glaudius',
            'gambar' => 'rogglaudius.jpg',
            'liga_id' => '4',
        ]);


        // keyboard seeder (4)
        DB::table('products')->insert([
            'nama' => 'Rexus Daxa M71',
            'gambar' => 'rexusdaxam71.jpg',
            'liga_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Black Widow V3',
            'gambar' => 'razerblackwidv3.jpg',
            'liga_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech Maxfit 61',
            'gambar' => 'fantechmaxfit61.jpg',
            'liga_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'ROG Claymoore',
            'gambar' => 'rogclaymore.jpg',
            'liga_id' => '4',
        ]);
    }
}
