<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'Generic Name' => 'fentanil',
            'Form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'Restriction Formula' => '5 amp/kasus.',
            'Description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 1
        ]);
        DB::table('products')->insert([
            'Generic Name' => 'fentanil',
            'Form' => 'patch 12,5 mcg/jam',
            'Restriction Formula' => '10 patch/bulan.',
            'Description' => 'patch: - Untuk nyeri kronik pada pasien kanker yang tidak terkendali.  - Tidak untuk nyeri akut.',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 1
        ]);
        DB::table('products')->insert([
            'Generic Name' => 'asam mefenamat',
            'Form' => 'kaps 250 mg ',
            'Restriction Formula' => '30 kaps/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 2
        ]);
        DB::table('products')->insert([
            'Generic Name' => 'asam mefenamat',
            'Form' => 'tab 500 mg ',
            'Restriction Formula' => '30 tab/bulan.',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 2
        ]);
        DB::table('products')->insert([
            'Generic Name' => 'alopurinol',
            'Description' => 'Tidak diberikan pada saat nyeri akut.',
            'Form' => 'tab 100 mg',
            'Restriction Formula' => '30 tab/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 3
        ]);
        DB::table('products')->insert([
            'Generic Name' => 'alopurinol',
            'Description' => 'Tidak diberikan pada saat nyeri akut.',
            'Form' => 'tab 300 mg',
            'Restriction Formula' => '30 tab/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 3
        ]);
        DB::table('products')->insert([
            'Generic Name' => 'amitriptilin',
            'Form' => 'tab 25 mg',
            'Restriction Formula' => '30 tab/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 4
        ]);
        DB::table('products')->insert([
            'Generic Name' => 'gabapentin',
            'Description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'Form' => 'kaps 100mg',
            'Restriction Formula' => '60 kaps/bulan',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 4
        ]);
    }
}
