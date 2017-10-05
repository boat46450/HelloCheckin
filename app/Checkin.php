<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $fillable = [
        'id', 'name', 'surname', 'code', '10-OCT', '12-OCT', '17-OCT', '19-OCT', '24-OCT', '26-OCT', '31-OCT', '02-NOV', '06-NOV'
    ];
}
