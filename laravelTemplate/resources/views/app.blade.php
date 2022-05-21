<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mb-1">
    <div class="navbar bg-indigo-600 py-5 flex flex-row justify-between">
        <h1>Logo</h1>
        <ul class="flex flex-row mx-10">
            <li class="bg-red-600 p-2 mr-1 hover:bg-red-700"><a href="www.google.com">Google</a></li>
            <li class="bg-green-600 p-2 mr-1 hover:bg-green-700"><a href="www.google.com">Yandex</a></li>
            <li class="bg-blue-600 p-2 mr-1 hover:bg-blue-700"><a href="www.google.com">Login</a></li>
        </ul>
    </div>
</div>
<form method="GET" action="{{route('welcome')}}" enctype="multipart/form-data">
    @csrf
    <labeL>Name:</labeL>
    <input type="text" name="name" class="border-solid border-2 border-sky-500 bottom-2">
    <button type="submit" class="bg-sky-500 px-3 py-1 m-3 hover:bg-sky-700 hover:text-white">Save</button>
</form>
</body>
</html>