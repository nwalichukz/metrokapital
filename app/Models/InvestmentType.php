<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentType extends Model
{
    use HasFactory;

    public function investment(){
        return $this->hasMany('App\Models\Investment');
    }
}
