<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopularVehicle extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function transmission() 
    {
        return $this->belongsTo('App\Models\Category', 'transmission_id');
    }

    public function power() 
    {
        return $this->belongsTo('App\Models\Category', 'power_id');
    }
}
