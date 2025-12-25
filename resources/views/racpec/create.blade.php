<h2>Добавить расписание комнаты</h2>

<form method="post" action="{{'create'}}">
    @csrf

    <label>Комната</label><br>
    <select name="room_id">
        @foreach($rooms as $room)
            <option value="{{$room->id}}">{{$room->name}}</option>
        @endforeach
    </select><br><br>
    <label>Дата</label><br>
    <input type="date" name="date"><br><br>
    <label>Начало</label><br><br>
    <input type="time" name="start_time"><br><br>
    <label>Конец</label><br><br>
    <input type="time" name="end_time"><br><br>
    <button type="submit">Добавить</button>
</form>

<style>

    h2{
        text-align: center;
        padding: 10px;
    }
    form {
        max-width: 400px;
        margin: auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;

    }

    input{
        width: 100%;
    }

    select{
        width: 100%;
    }
    button {
        width: 40%;
        padding: 10px;
        background-color: #718096;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }
</style>
