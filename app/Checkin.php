<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $table = 'checkins';
    protected $fillable = [
        '_id', 'name', 'code', 'OCT10', 'OCT12', 'OCT17', 'OCT19', 'OCT24', 'OCT31', 'NOV02', 'NOV06'
    ];
}
