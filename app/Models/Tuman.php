<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuman extends Model
{

    protected $table = "districts";

    public function viloyat()
    {
        return $this->belongsTo(Viloyat::class, 'region_id');
    }
    public function users(){
        return $this->hasMany(User::class,'place');
    }
    public function works()
    {
        return $this->hasMany(Work::class, 'place');
    }
}