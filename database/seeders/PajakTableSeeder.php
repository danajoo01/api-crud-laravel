<?php

namespace Database\Seeders;

use App\Models\Pajak;
use Illuminate\Database\Seeder;

class PajakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'id' => "1",
                'nama' => 'pph',
                'rate' =>'0.5'  ,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => "2",
                'nama' => 'pajak toko',
                'rate' => '0.10',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

        ];

        \DB::table('pajaks')->insert($posts);
    }
}
