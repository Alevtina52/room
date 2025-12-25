<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Racpec extends Model
{
    protected $table = 'racpec';

    public $timestamps = false;

    protected $fillable = [
        'room_id',
        'date',
        'start_time',
        'end_time',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

}

