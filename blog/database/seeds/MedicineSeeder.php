<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'Generic_Name' => 'fentanil',
            'Form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'Restriction_Formula' => '5 amp/kasus',
            'Description' => 'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi',
            
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>1,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'oksikodon',
            'Form' => 'kaps 5 mg',
            'Restriction_Formula' => '60 kaps/bulan',
            'Description' => 'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock',
          
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>1,
            'Image'=>'oksikodon.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'morfin',
            'Form' => 'tab 10 mg',
            'Restriction_Formula' => 'initial dosis 3-4 tab/hari',
            'Description' => 'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit',
           
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>1,
            'Image'=>'morfin.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic_Name' => 'ketoprofen',
            'Form' => 'sup 100 mg',
            'Restriction_Formula' => '2 sup/hari, maks 3 hari',
            'Description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral',
          
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>2,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'ketorolak',
            'Form' => 'inj 30 mg/mL',
            'Restriction_Formula' => '2-3 amp/hari,maks 2 hari',
            'Description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.',
          
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>2,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'metamizol',
            'Form' => 'inj 500 mg/mL',
            'Restriction_Formula' => '4 amp selama dirawat',
            'Description' => 'Untuk nyeri post operatif dan hanya dalam waktu singkat',
          
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>2,
            'Image'=>'fentanil.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic_Name' => 'alopurinol',
            'Form' => 'tab 100 mg',
            'Restriction_Formula' => '30 tab/bulan',
            'Description' => 'Tidak diberikan pada saat nyeri akut',
         
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>3,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'kolkisin',
            'Form' => 'tab 500 mcg',
            'Restriction_Formula' => '30 tab/bulan',
            'Description' => '',
       
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>3,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'probenesid',
            'Form' => 'tab 500 mg',
            'Restriction_Formula' => '30 tab/bulan',
            'Description' => '',
    
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>3,
            'Image'=>'fentanil.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic_Name' => 'amitriptilin',
            'Form' => 'tab 25 mg',
            'Restriction_Formula' => '30 tab/bulan',
            'Description' => '',
           
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>4,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'gabapentin',
            'Form' => 'kaps 100 mg',
            'Restriction_Formula' => '60 kaps/bulan',
            'Description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
           
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>4
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'karbamazepin',
            'Form' => 'tab 100 mg',
            'Restriction_Formula' => '60 tab/bulan',
            'Description' => 'Hanya untuk neuralgia trigeminal',
         
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>4,
            'Image'=>'fentanil.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic_Name' => 'diazepam',
            'Form' => 'inj 5 mg/mL',
            'Restriction_Formula' => '10 amp/kasus, kecuali untuk kasus di ICU.',
            'Description' => 'Tidak untuk i.m',
         
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>5,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'fenitoin',
            'Form' => 'kaps 30 mg*',
            'Restriction_Formula' => '90 kaps/bulan',
            'Description' => 'Dapat digunakan untuk status konvulsivus',
           
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>5,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'levetirasetam',
            'Form' => 'tab 250 mg',
            'Restriction_Formula' => '60 tab/bulan',
            'Description' => 'Sebagai terapi tambahan pada pasien epilepsi onset parsial',
           
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>0,
            'Faskes_TK3'=>1,
            'category_id'=>5,
            'Image'=>'fentanil.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic_Name' => 'amoksisilin',
            'Form' => 'tab 250 mg',
            'Restriction_Formula' => '10 hari',
            'Description' => '-',
           
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>6,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'ampisilin',
            'Form' => 'inj 250 mg (i.m./i.v.)',
            'Restriction_Formula' => '10 hari',
            'Description' => '-',
          
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>6,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'benzatin benzilpenisilin',
            'Form' => 'inj 1,2 juta IU/mL (i.m.)',
            'Restriction_Formula' => '2 vial/bulan',
            'Description' => '-',
           
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>6,
            'Image'=>'fentanil.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic_Name' => 'dapson',
            'Form' => 'tab 100 mg',
            'Restriction_Formula' => '-',
            'Description' => '-',
           
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>7,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'klofazimin',
            'Form' => 'kaps dalam minyak 50 mg',
            'Restriction_Formula' => '-',
            'Description' => '-',
            
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>7,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'rifampisin',
            'Form' => 'kaps 300 mg',
            'Restriction_Formula' => '-',
            'Description' => '-',
            
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>7,
            'Image'=>'fentanil.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic_Name' => 'ketokonazol',
            'Form' => 'tab 200 mg',
            'Restriction_Formula' => 'maks 30 tab/kasus',
            'Description' => '-',
            
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>8,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'mikafungin',
            'Form' => 'serb inj 50 mg',
            'Restriction_Formula' => '-',
            'Description' => 'Hanya digunakan untuk kandidiasis sistemik yang sudah tidak respons dengan flukonazol',
           
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>0,
            'Faskes_TK3'=>1,
            'category_id'=>8,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'vorikonazol',
            'Form' => 'tab sal selaput 200 mg',
            'Restriction_Formula' => 'selama 4 minggu',
            'Description' => 'Hanya untuk akut invasif aspergilosis',
           
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>0,
            'Faskes_TK3'=>1,
            'category_id'=>8,
            'Image'=>'fentanil.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic_Name' => 'asiklovir',
            'Form' => 'tab 200 mg',
            'Restriction_Formula' => '-',
            'Description' => '-',
           
            'Faskes_TK1'=>1,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>9,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'valasiklovir',
            'Form' => 'tab 500 mg',
            'Restriction_Formula' => '-',
            'Description' => '-',
            
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>9,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'gansiklovir',
            'Form' => 'serb inj 500 mg',
            'Restriction_Formula' => '-',
            'Description' => '-',
           
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>9,
            'Image'=>'fentanil.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic_Name' => 'anastrozol',
            'Form' => 'tab 1 mg',
            'Restriction_Formula' => '30 tab/bulan',
            'Description' => 'Dapat digunakan untuk kanker payudara post menopause dengan pemeriksaan reseptor estrogen/progesteron positif',
           
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>0,
            'Faskes_TK3'=>1,
            'category_id'=>10,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'bikalutamid',
            'Form' => 'tab sal 50 mg',
            'Restriction_Formula' => '30 tab/bulan',
            'Description' => 'Untuk kanker prostat,diberikan 5 - 7 hari sebelum atau bersamaan dengan pemberian goserelin asetat atau leuprorelin asetat.Diberikan sampai PSA (Prostate Spesific Antigen) membaik atau terjadi progress',
            
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>0,
            'Faskes_TK3'=>1,
            'category_id'=>10,
            'Image'=>'fentanil.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic_Name' => 'dienogest',
            'Form' => 'tab 2 mg',
            'Restriction_Formula' => '30 tab/bulan selama maks 6 bulan',
            'Description' => 'Hanya untuk endometriosis',
            
            'Faskes_TK1'=>0,
            'Faskes_TK2'=>1,
            'Faskes_TK3'=>1,
            'category_id'=>10,
            'Image'=>'fentanil.jpg'
        ]);
    }
}
