<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-wY5Kc1hxz3fI6YrKXZTLOIVmW2r+yCwCTI05N8Hc5w+AkFq9o1E5O6Z3hAk/5lzKJ9a9tNppxY2oCJlINmR9Hg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
     @vite('resources/css/app.css')
</head>
<body>
    {{ $slot }}
</body>
</html>
