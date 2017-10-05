<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
            '_id' => '59130500069',
            'name' => 'puripat',
            'surname' => 'arayasirikul',
            'code' => '456123',
            'OCT-10' => false,
            'OCT-12' => false,
            'OCT-17' => false,
            'OCT-19' => false,
            'OCT-24' => false,
            'OCT-26' => false,
            'OCT-31' => false,
            'NOV-02' => false,
            'NOV-06' => false,
        ]);
        DB::table('checkins')->insert([
            '_id' => '59130500000',
            'name' => 'qwe',
            'surname' => 'zxc',
            'code' => '456798',
            'OCT-10' => false,
            'OCT-12' => false,
            'OCT-17' => false,
            'OCT-19' => false,
            'OCT-24' => false,
            'OCT-26' => false,
            'OCT-31' => false,
            'NOV-02' => false,
            'NOV-06' => false,
        ]);
    }
}
