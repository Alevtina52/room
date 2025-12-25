<h2>Авторизация</h2>
<form method="post" action="{{route('login')}}">
    @csrf
    <input type="email" name="email"><br>
    <input type="password" name="password"><br>
    <button type="submit">Войти</button> <br>
</form>
