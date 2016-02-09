<?php namespace App\Transformers;

use App\Zone;
use League\Fractal\TransformerAbstract;

class ZoneTransformer extends TransformerAbstract
{

    public function transform(Zone $zone)
    {
        return [
            'id'           => $zone->id,
        ];
    }

}
