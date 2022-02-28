<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=> 'ANALGESIK NARKOTIK',
            'description'=> 'Sesuai dengan namanya analgesik opioid merupakan golongan obat analgesik yang memiliki sifat-sifat seperti opium atau narkotik.'
        ]);

        DB::table('categories')->insert([
            'name'=> 'ANALGESIK NON NARKOTIK',
            'description'=> 'Analgetika perifer (non-narkotik), yang terdiri dari obat-obat yang tidak bersifat narkotik dan tidak bekerja sentral.'
        ]);

        DB::table('categories')->insert([
            'name'=> 'ANTIPIRAI',
            'description' => 'Antipirai adalah obat untuk mengobati pirai (artritis gout) atau sering disebut penyakit asam urat.'
        ]);

        DB::table('categories')->insert([
            'name'=> 'NYERI NEUROPATIK',
            'description'=> 'Neuropati adalah istilah yang digunakan untuk gejala gangguan atau penyakit pada saraf di tubuh.'
        ]);
    }
}
