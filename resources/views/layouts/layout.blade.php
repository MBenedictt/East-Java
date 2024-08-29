<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit East Java | {{ $title }}</title>

    <link rel="icon" href="{{ asset('assets/java-logo.jpg') }}">

    <!-- Tailwind Script -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }
        
        .public-sans-thin {
            font-family: "Public Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 100;
            font-style: normal;
        }
    </style>

    @yield('head')
</head>
<body>
    
    @yield('content')
    
    @yield('script')
</body>
</html>