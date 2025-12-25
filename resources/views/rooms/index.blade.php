<h2>Расписание комнат</h2>

@foreach($rooms as $room)
    <h3>{{$room->name}}</h3>
    @if($room->racpec->count())
        <ul>
            @foreach($room->racpec as $racpec)
                <li>
                    {{$racpec->date}}:{{$racpec->start_time}} - {{$racpec->end_time}}
                </li>
            @endforeach
        </ul>
    @endif
@endforeach
