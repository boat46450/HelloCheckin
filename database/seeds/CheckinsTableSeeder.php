<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use \Excel as E;

class CheckinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        E::load('\public\list.xlsx', function($reader) {
            $results = $reader->toArray();
            foreach ($results as $r) {
                DB::table('checkins')->insert([
                    '_id' => $r['student_id'],
                    'name' => $r['name_surname'],
                    'code' => $r['ticketno'],
                    'OCT09' => false,
                    'OCT10' => false,
                    'OCT12' => false,
                    'OCT17' => false,
                    'OCT19' => false,
                    'OCT24' => false,
                    'OCT31' => false,
                    'NOV02' => false,
                    'NOV06' => false,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            }
        });
    }
}
