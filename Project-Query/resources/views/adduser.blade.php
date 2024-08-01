<h1>Add User</h1>
@foreach ($add as $id =>$user )
    <h3>Name : {{$user->name}}</h3> |
    <h3>Email : {{$user->email}}</h3> |
    <h3>Age : {{$user->age}}</h3> |
    <h3>City : {{$user->city}}</h3> |
    
@endforeach


