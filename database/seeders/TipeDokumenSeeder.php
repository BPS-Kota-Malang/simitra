<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipeDokumen;

class TipeDokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipeDokumen::create(
            ['name'     => 'Pas Foto']
        );

        TipeDokumen::create(
            ['name'     => 'KTP']
        );

        TipeDokumen::create(
            ['name'     => 'Ijazah Terakhir']
        );

        TipeDokumen::create(
            ['name'     => 'Daftar Riwayat Hidup']
        );

        TipeDokumen::create(
            ['name'     => 'Surat Lamaran']
        );

        TipeDokumen::create(
            ['name'     => 'Surat Pernyataan Memiliki Gadget']
        );

        TipeDokumen::create(
            ['name'     => 'Surat Pernyataan Tempat Tinggal']
        );
    }
}
