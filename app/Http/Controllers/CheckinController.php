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

    // function export

    public function test() {
        dd($this->checkin->get());
    }
}
