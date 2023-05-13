<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

    protected $fillable = ['eventname', 'eventdescription', 'date', 'time', 'user_id'];

    public function relUsers(){
        return $this->hasOne('App\Models\users', 'id', 'user_id');
    }
}
