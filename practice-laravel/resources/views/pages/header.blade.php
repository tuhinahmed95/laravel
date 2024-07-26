<h1>Header Page</h1>

{{-- @foreach ($fruitsname as $key => $value )
        <p>{{$key}} - {{$value}}</p>
    
@endforeach --}}

@forelse ( $fruitsname as $key => $value )
        <p>{{$key}} - {{$value}}</p>
    
@empty
    <p>No Value Found .</p>
@endforelse