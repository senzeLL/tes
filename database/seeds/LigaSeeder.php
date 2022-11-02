<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligas')->insert([
            'nama' => 'Rexus',
            'gambar' => 'Rexuz.png',
        ]);

        DB::table('ligas')->insert([
            'nama' => 'Razer',
            'gambar' => 'razerr.png',
        ]);

        DB::table('ligas')->insert([
            'nama' => 'Fantech',
            'gambar' => 'Fantech.png',
        ]);

        DB::table('ligas')->insert([
            'nama' => 'ROG',
            'gambar' => 'Rog.png',
        ]);
    }
}
