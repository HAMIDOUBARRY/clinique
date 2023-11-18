<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class provenancetableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('provenances')->insert([
            ['province'=>'Références médicales '],
            ['province'=>'Urgences médicales '],
            ['province'=>'Autoréférence'],
            ['province'=>'Transferts inter-hôpitaux'],
            ['province'=>'Consultations en ligne'],
            ['province'=>'Références d\' autres patients'],
            ['province'=>'Programmes de dépistage'],
              
          ]);
    }
}
