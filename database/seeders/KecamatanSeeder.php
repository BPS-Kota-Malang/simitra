<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kecamatan;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kecamatan::create(
            ['kecamatan_tipe'     => '[010] Kedungkandang']
        );

        Kecamatan::create(
            ['kecamatan_tipe'     => '[020] Sukun']
        );

        Kecamatan::create(
            ['kecamatan_tipe'     => '[030] Klojen']
        );

        Kecamatan::create(
            ['kecamatan_tipe'     => '[040] Blimbing']
        );

        Kecamatan::create(
            ['kecamatan_tipe'     => '[050] Lowokwaru']
        );
    }
}