<h2>Добавить комнату</h2>

<form method="post" action="{{route('rooms')}}">
    @csrf
    <input type="text" name="name" required>
    <button>Добавить</button>
</form>
