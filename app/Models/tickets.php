<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    use HasFactory;
    
    public function relEvento(){
        return $this->hasOne('App\Models\events', 'id', 'event_id');
    }
}
