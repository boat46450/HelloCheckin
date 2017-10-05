<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CheckinRepositoryInterface;

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

    public function exportPage() {
        $data = [
            (object)[
                '_id' => '59130500000',
                'name' => 'qwe',
                'surname' => 'zxc',
                'code' => '456798',
                'OCT10' => 0,
                'OCT12' => 0,
                'OCT17' => 0,
                'OCT19' => 0,
                'OCT24' => 0,
                'OCT26' => 0,
                'OCT31' => 0,
                'NOV02' => 0,
                'NOV06' => 0
            ],
            (object)[
                '_id' => '59130500001',
                'name' => 'dgh',
                'surname' => 'uty',
                'code' => '456790',
                'OCT10' => 0,
                'OCT12' => 0,
                'OCT17' => 0,
                'OCT19' => 0,
                'OCT24' => 0,
                'OCT26' => 0,
                'OCT31' => 0,
                'NOV02' => 0,
                'NOV06' => 0
            ]
        ];
        return view('export', ['data' => $data]);
    }

    // function export

    public function test() {
        dd($this->checkin->get());
    }
}
