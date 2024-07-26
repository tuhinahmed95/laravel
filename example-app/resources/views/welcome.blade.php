@include('pages.header', ['name' => 'tuhin'])
<h1>Home Page</h1>

@php
    $fruits = ['mango','pineapple','banana','orange']
@endphp

@include('pages.footer',['fruit'=> $fruits])