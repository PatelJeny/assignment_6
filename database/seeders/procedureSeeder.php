<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class procedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param1 = 'jeny';
        $param2 = 'jeny@gmail.com';

        // Employee::statement('CALL insertvalue(?,?)', [$param1  ,  $param2 ]);

        // DB::statement('CALL insertvalue(?,?)', [$param1  ,  $param2 ]);

        Employee::create('CALL insertvalue(?,?)', [$param1  ,  $param2 ]);
    }
}
