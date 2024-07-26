<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document - @yield('title','website')</title>
    <link rel="stylesheet" href="css/style.css">
    @stack('style')
</head>
<body>
    <div class="tuhin"> Tuhin</div>
    <div class="navbar"> 
            <a href="/">home</a>
            <a href="/about">About</a>
            <a href="/post">Post</a>
            <a href="/users">Users</a>
            <a href="/user">User</a>
    
    </div>
    
        <main> 
            @hasSection('content')
            @yield('content')

            @else
            <h1>no content found</h1>
            @endif
        </main>
    
    <footer> 
        this is footer
    </footer>

    @stack('scripts')
</body>
</html>