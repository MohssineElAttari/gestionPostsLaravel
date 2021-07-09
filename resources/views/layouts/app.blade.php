<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center"> 
            <li class="p-3">
                <a href="">Home</a>
            </li>
            <li class="p-3">
                <a href="">Dashboard</a>
            </li>
            <li class="p-3">
                <a href="">Post</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li class="p-3"><a href="">Login</a></li>
            <li class="p-3"><a href="">Mohssine Elattari</a></li>
            <li class="p-3"><a href="">Register</a></li>
            <li class="p-3"><a href="">Logout</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>