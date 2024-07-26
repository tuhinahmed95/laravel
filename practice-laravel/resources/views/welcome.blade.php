@php

    $fruits = []

@endphp

@include('pages.header',['fruitsname'=> $fruits] )

<h1>Our Home Page</h1>


<a href="/firstpost">firtpage</a> <br>
<a href="">Post</a> <br><br>

{!!"<h1>hello world</h1>"!!} <br>

{{-- use js --}}
{!!"<script>alert('hey')</script>"!!} <br>


@php
    $names = ['Salman Khan','Shahrukh Khan','Aamir Khan','Probhas',"Yash"];
@endphp

<ul> 
    @foreach ($names as $n)
    @if ($loop->even)
        <li style="color: red">{{$n}}</li>
    @elseif ($loop->odd)
        <li style="color: blueviolet">{{$n}}</li>
       
    @endif
        
    @endforeach
</ul>
@include('pages.footer', ['name2' => 'Isan Rahman'])
