<div>
    <h1>Hi {{Auth::user()->email}}</h1>
</div>
<form action="{{route('logout')}}" method="post">
    @csrf
    <input type="submit" value="Logout">
</form>
