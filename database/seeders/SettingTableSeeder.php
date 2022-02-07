<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Toko Ku',
            'alamat' => 'Jl. Anyer Kecamatan Anyer Serang Banten',
            'telepon' => '08997531796',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => 'adminlte/dist/img/logo.png',
            'path_kartu_member' => 'adminlte/dist/img/member.jpg',
        ]);
    }
}
