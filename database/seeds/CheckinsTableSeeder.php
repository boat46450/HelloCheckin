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
            'OCT10' => false,
            'OCT12' => false,
            'OCT17' => false,
            'OCT19' => false,
            'OCT24' => false,
            'OCT26' => false,
            'OCT31' => false,
            'NOV02' => false,
            'NOV06' => false,
        ]);
        DB::table('checkins')->insert([
            '_id' => '59130500000',
            'name' => 'qwe',
            'surname' => 'zxc',
            'code' => '456798',
            'OCT10' => false,
            'OCT12' => false,
            'OCT17' => false,
            'OCT19' => false,
            'OCT24' => false,
            'OCT26' => false,
            'OCT31' => false,
            'NOV02' => false,
            'NOV06' => false,
        ]);
    }
}
