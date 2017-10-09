<?php

namespace App\Repositories;

use App\Checkin;
use Illuminate\Database\QueryException;

class CheckinRepository implements CheckinRepositoryInterface {

    public function get() {
        $responses = Checkin::all();
        $data = [];
        foreach ($responses as $response) {
            $temp = (object)[
                'id' => $response->_id,
                'name' => $response->name,
                'surname' => $response->surname,
                'code' => $response->code,
                'OCT10' => $response->OCT10,
                'OCT12' => $response->OCT12,
                'OCT17' => $response->OCT17,
                'OCT19' => $response->OCT19,
                'OCT24' => $response->OCT24,
                'OCT31' => $response->OCT31,
                'NOV02' => $response->NOV02,
                'NOV06' => $response->NOV06
            ];

            array_push($data, $temp);
        }
        return $data;
    }

    public function update($code, $date) {
        try {
            $responses = Checkin::where('code', $code)->update([$date => true]);
            if($responses == 1)
                return 100;
            else
                return 400;
        }
        catch(QueryException $e) {
            return 400;
        }
    }
}