<?php

namespace App\Repositories;

use App\Checkin;

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
                '10-OCT' => $response->OCT10,
                '12-OCT' => $response->OCT12,
                '17-OCT' => $response->OCT17,
                '19-OCT' => $response->OCT19,
                '24-OCT' => $response->OCT24,
                '26-OCT' => $response->OCT26,
                '31-OCT' => $response->OCT31,
                '02-NOV' => $response->NOV02,
                '06-NOV' => $response->NOV06
            ];

            array_push($data, $temp);
        }
        return $data;
    }

    public function update($code, $date) {
        $responses = Checkin::where('code', $code)->update([$date => true]);
        if ($responses == 1)
            return 100;
        else
            return 400;
    }
}