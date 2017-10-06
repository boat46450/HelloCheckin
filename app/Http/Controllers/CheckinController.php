<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CheckinRepositoryInterface;
use Excel;
use Carbon\Carbon;

class CheckinController extends Controller
{
    protected $checkin;

    public function __construct(CheckinRepositoryInterface $ch) {
        $this->checkin = $ch;
    }

    public function index() {
        return view('index');
    }

    public function enterCode(Request $request) {
        $code = $request->code;
        if($code == 'alpaca')
            return redirect('/checkin');
        return redirect('/')->withErrors(['staffCode' => 'wrong staff code']);
    }

    public function checkinPage() {
        return view('checkin');
    }

    public function checkin($code) {
        $date = explode(" ", Carbon::now()->format('m d'));
        if($date[0] == '10')
            $date[0] = 'OCT';
        elseif ($data[0] == '11')
            $date[0] = 'NOV';
        
        $status = $this->checkin->update($code, implode('', $date));
        return $status;
    }

    public function export() {
        Excel::create('จำนวนครั้งของผู้เข้าร่วมกิจกรรม HelloWorldAlpaca', function($excel) {
            $excel->sheet('Sheet1', function($sheet) {
                $data = [];
                array_push(
                    $data,
                    array(
                        '#',
                        'รหัสนักศึกษา',
                        'ชื่อ-นามสกุล',
                        'จำนวนครั้ง',
                        '10 ตุลาคม 2560',
                        '12 ตุลาคม 2560',
                        '17 ตุลาคม 2560',
                        '19 ตุลาคม 2560',
                        '24 ตุลาคม 2560',
                        '26 ตุลาคม 2560',
                        '31 ตุลาคม 2560',
                        '2 พฤษจิกายน 2560',
                        '6 พฤษจิกายน 2560')
                );
                $checkins = $this->checkin->get();
                foreach ($checkins as $k => $v) {
                    $count = 0;
                    if($v->OCT10 == 1) {
                        $count++;
                    }
                    if($v->OCT12 == 1) {
                        $count++;
                    }
                    if($v->OCT17 == 1) {
                        $count++;
                    }
                    if($v->OCT19 == 1) {
                        $count++;
                    }
                    if($v->OCT24 == 1) {
                        $count++;
                    }
                    if($v->OCT26 == 1) {
                        $count++;
                    }
                    if($v->OCT31 == 1) {
                        $count++;
                    }
                    if($v->NOV02 == 1) {
                        $count++;
                    }
                    if($v->NOV06 == 1) {
                        $count++;
                    }
                    
                    array_push(
                        $data,
                        array(
                            $k+1,
                            $v->id,
                            $v->name,
                            $count . ' ครั้ง',
                            $v->OCT10 == 1? '✓' : '',
                            $v->OCT12 == 1? '✓' : '',
                            $v->OCT17 == 1? '✓' : '',
                            $v->OCT19 == 1? '✓' : '',
                            $v->OCT24 == 1? '✓' : '',
                            $v->OCT26 == 1? '✓' : '',
                            $v->OCT31 == 1? '✓' : '',
                            $v->NOV02 == 1? '✓' : '',
                            $v->NOV06 == 1? '✓' : '',
                        )
                    );
                }
                $sheet->fromArray($data, null, 'A1', false, false);
            });
        })->export('xlsx');
    }
}
