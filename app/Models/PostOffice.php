<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostOffice extends Model
{
    public function getDeliveryStatusAttribute($value)
    {
        return $value?'Delivery':'Non-Delivery';
    }

    public function pincode()
    {
        return $this->hasOne(Pincode::class,'id', 'pincode_id');
    }

    public function division()
    {
        return $this->hasOne(Division::class,'id', 'division_id');
    }

    public function region()
    {
        return $this->hasOne(Region::class,'id', 'region_id');
    }

    public function circle()
    {
        return $this->hasOne(Circle::class,'id', 'circle_id');
    }

    public function taluk()
    {
        return $this->hasOne(Taluk::class,'id', 'taluk_id');
    }

    public function district()
    {
        return $this->hasOne(District::class,'id', 'district_id');
    }

    public function state()
    {
        return $this->hasOne(State::class,'id', 'state_id');
    }
}
