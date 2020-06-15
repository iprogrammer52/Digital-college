<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetCertificated extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'certificated_type', 'user_id', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
