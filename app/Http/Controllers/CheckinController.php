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

    public function test() {
        dd($this->checkin->get());
    }
}
