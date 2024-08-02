<h1>All Students Data</h1>

@foreach ($students as  $data )
    <h3>{{ $data->id }} |
        {{ $data->name }} |
        {{ $data->email }} |
        {{ $data->city_name }}</h3> 
@endforeach