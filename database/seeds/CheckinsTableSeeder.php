<?php

use Illuminate\Database\Seeder;

class CheckinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('checkins')->insert([
            'id' => '',
            'name' => '',
            'surname' => '',
            '10-OCT' => false,
            '12-OCT' => false,
            '17-OCT' => false,
            '19-OCT' => false,
            '24-OCT' => false,
            '26-OCT' => false,
            '31-OCT' => false,
            '02-NOV' => false,
            '06-NOV' => false,
        ]);
    }
}
