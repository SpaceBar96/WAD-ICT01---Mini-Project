<form action="userlist" method="post">
    @csrf 
    <input value="{{request()->input('search')}}" name="search" type="search" placeholder="search">
    <button type="submit">Search</button>