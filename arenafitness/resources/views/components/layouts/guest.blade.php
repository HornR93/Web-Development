<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex h-screen items-center justify-center bg-zinc-800 flex-1">

    {{$slot}}
    
</body>