<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $table = 'checkins';
    protected $fillable = [
        '_id', 'name', 'surname', 'code', 'OCT-10', 'OCT-12', 'OCT-17', 'OCT-19', 'OCT-24', 'OCT-26', 'OCT-31', 'NOV-02', 'NOV-06'
    ];
}
