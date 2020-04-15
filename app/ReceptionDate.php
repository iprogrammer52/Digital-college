<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceptionDate extends Model
{
    public function receptionTimes()
    {
        return $this->hasMany(ReceptionTime::class);
    }
}
