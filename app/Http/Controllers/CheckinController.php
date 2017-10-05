<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CheckinRepositoryInterface;
use Excel;

class CheckinController extends Controller
{
    protected $checkin;

    public function __construct(CheckinRepositoryInterface $ch) {
        $this->checkin = $ch;
    }

    public function index() {
        return view('index');
    }

    // function enterCode

    public function checkinPage() {
        return view('checkin');
    }

    // function checkin

    public function export() {
        Excel::create('จำนวนครั้งของผู้เข้าร่วมกิจกรรม HelloWorldAlpaca', function($excel) {
            $excel->sheet('Sheet1', function($sheet) {
                $data = [];
                array_push($data, array('#', 'รหัสนักศึกษา', 'ชื่อ-นามสกุล', 'จำนวนครั้ง', 'วันที่เข้าร่วม'));
                $checkins = $this->checkin->get();
                foreach ($checkins as $k => $v) {
                    $count = 0;
                    $date = '';
                    if($v->OCT10 == 1) {
                        $count++;
                        $date .= '10-OCT';
                    }
                    if($v->OCT12 == 1) {
                        $count++;
                        $date .= ', 12-OCT';
                    }
                    if($v->OCT17 == 1) {
                        $count++;
                        $date .= ', 17-OCT';
                    }
                    if($v->OCT19 == 1) {
                        $count++;
                        $date .= ', 19-OCT';
                    }
                    if($v->OCT24 == 1) {
                        $count++;
                        $date .= ', 24-OCT';
                    }
                    if($v->OCT26 == 1) {
                        $count++;
                        $date .= ', 26-OCT';
                    }
                    if($v->OCT31 == 1) {
                        $count++;
                        $date .= ', 31-OCT';
                    }
                    if($v->NOV02 == 1) {
                        $count++;
                        $date .= ', 02-NOV';
                    }
                    if($v->NOV06 == 1) {
                        $count++;
                        $date .= ', 06-NOV';
                    }
                    
                    array_push($data, array($k+1, $v->id, $v->name . ' ' . $v->surname, $count . ' ครั้ง', $date));
                }
                $sheet->fromArray($data, null, 'A1', false, false);
            });
        })->export('xlsx');
    }
}
