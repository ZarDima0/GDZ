<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Direction extends Model
{
    protected $table = 'direction'; 

    public function institute() 
    {
        return $this->belongsTo(Institute::class);
    }
}
