<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class File extends Model
{
    use HasFactory;
    protected $fillable  = ['nameFile','id_teacher','id_direction','path_file','article_id','user_id'];
    
    protected $table = 'file';

    public function User() {
        return $this->belongsTo(User::class);
    }
}
