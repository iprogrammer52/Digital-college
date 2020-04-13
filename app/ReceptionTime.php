<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceptionTime extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time', 'date','status',
    ];

}
