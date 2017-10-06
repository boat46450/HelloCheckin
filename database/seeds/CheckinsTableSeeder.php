<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
            'name' => 'puripat arayasirikul',
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
