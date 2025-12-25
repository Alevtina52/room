<?php

namespace App\Http\Controllers;

use App\Models\Racpec;
use App\Models\Room;
use Illuminate\Http\Request;

class RacpecController extends Controller
{
    public  function create()
    {
        $rooms = Room::all();
        return view('racpec.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        Racpec::create([
            'room_id' => $request->room_id,
            'date' => $request->date,
            'start_time' =>$request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect('/racpec    /create');
    }

}
