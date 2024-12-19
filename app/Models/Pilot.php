<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    use HasFactory;
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

