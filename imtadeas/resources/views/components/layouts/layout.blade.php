<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Im Tadeas</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

</head>
<body class="min-h-screen bg-gradient-to-b from-[#f5e1a4] via-[#eaeaea] to-[#c0c0c0] flex flex-col items-center justify-center">
    {{ $slot }}
</body>
</html>