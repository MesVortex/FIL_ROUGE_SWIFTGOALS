<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SwiftGoals') }}</title>

    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;600;700;800&family=Kavoon&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="font-lexend bg-gray-100">
    <!-- Page Content -->
    <div class="h-screen">

        <header>
            <x-dashboardNavbar />
        </header>

        <main>
            <!-- strat wrapper -->
            {{ $slot }}
            <!-- end wrapper -->
        </main>
    </div>
    <!-- script -->
    <script>
        const toggleButton = document.querySelector('#toggle-sidebar');
        const sidebar = document.querySelector('#sidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
    <!-- end script -->

</body>

</html>