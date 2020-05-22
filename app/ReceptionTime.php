<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceptionTime extends Model
{
    public function ReceptionDate()
    {
        return $this->belongsTo(ReceptionDate::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time', 'reception_date', 'free', 'status',
    ];

}
