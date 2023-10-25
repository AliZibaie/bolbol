<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Login">
    <a href="{{route('showRegister')}}">register</a>
</form>
