<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    
    public function dj(){
        return $this->belongsTo(DjUser::class, 'dj_id', 'id');
    }
}
