<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('services')->insert([
            ['nom'=>'Service d \'urgence (Urgences) '],
            ['nom'=>'Service de médecine'],
            ['nom'=>'Service de réadaptation '],
            ['nom'=>'Service de chirurgie'],
            ['nom'=>'Service de pédiatrie'],
            ['nom'=>'Service de gynécologie-obstétrique'],
            ['nom'=>'Service de radiologie '],
            ['nom'=>'Service de soins intensifs'],
            ['nom'=>'Service de soins palliatifs'],
            ['nom'=>'Service de psychiatrie'],
            ['nom'=>'Service de cardiologie'],
            ['nom'=>'Service d \' oncologie'],
            ['nom'=>'Service de pneumologie'],
            ['nom'=>'Service de dermatologie'],
              
          ]);
    }
}
