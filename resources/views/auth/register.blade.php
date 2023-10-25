<form action="{{route('register')}}" method="post">
    @csrf
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Register">
    <a href="{{route('showLogin')}}">login</a>
</form>
