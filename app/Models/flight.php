<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class flight extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        "from_city",
        "to_city",
        "airline",
        "imageAirline",
        "departing_time",
        "arriving_time",
        "duration",
        "airline",
        "has_wifi",
        "is_direct",
        "imageCity",
        "pilot_id",
        "price",

        

    ];
    public function getRouteKeyName()
    {
        return 'id';
    }
    public function pilots(){
        return $this->belongsTo(Pilot::class,'pilot_id',);
    }
}
