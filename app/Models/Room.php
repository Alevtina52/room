<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    public $timestamps = false;


    protected $fillable = ['name'];

    public function racpec()
    {
        return $this->hasMany(Racpec::class, 'room_id');
    }

}
