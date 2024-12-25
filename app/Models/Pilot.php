<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pilot extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        "name",
        "license_number",
        "license_expiry",
        "experience_years",
        "availability",
      

    ];
    public function getRouteKeyName()
    {
        return 'id';
    }
        public function flights(){
            return $this->hasMany(flight::class);
        }
}

