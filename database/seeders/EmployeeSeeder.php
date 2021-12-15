<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama'=> 'Rika',
            'jeniskelamin'=> 'cewe',
            'notelpon'=> '081450203738',
        ]);
    }
}