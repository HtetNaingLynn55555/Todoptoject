<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       for($i = 0 ; $i<3 ; $i++)
       {
        DB::table('todos')->insert([
            'name' => Str::random(10),
            'Todo' => Str::random(100),

        ]);
       }
    }
}
