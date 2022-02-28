<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'Name' => 'ANALGESIK NARKOTIK',
            'Description' => '-',
        ]);
        DB::table('categories')->insert([
            'Name' => 'ANALGESIK NON NARKOTIK',
            'Description' => '-',
        ]); 
        DB::table('categories')->insert([
            'Name' => 'ANTIPIRAI',
            'Description' => '-',
        ]); 
        DB::table('categories')->insert([
            'Name' => 'NYERI NEUROPATIK',
            'Description' => '-',
        ]);
        DB::table('categories')->insert([
            'Name' => 'ANTIEPILEPSI - ANTIKONVULSI',
            'Description' => '-',
        ]);
        DB::table('categories')->insert([
            'Name' => 'ANTIBAKTERI',
            'Description' => '-',
        ]);
        DB::table('categories')->insert([
            'Name' => 'ANTIINFEKSI KHUSUS',
            'Description' => '-',
        ]);
        DB::table('categories')->insert([
            'Name' => 'ANTIFUNGI',
            'Description' => '-',
        ]);
        DB::table('categories')->insert([
            'Name' => 'ANTIVIRUS',
            'Description' => '-',
        ]);
        DB::table('categories')->insert([
            'Name' => 'HORMON dan ANTIHORMON',
            'Description' => '-',
        ]);
    }
}
