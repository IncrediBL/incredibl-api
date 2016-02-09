<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class IpClass extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ips';

    public function zones()
    {
        return $this->belongsToMany('App\Zone');
    }


    // IP hasmany->incidents/events
}
