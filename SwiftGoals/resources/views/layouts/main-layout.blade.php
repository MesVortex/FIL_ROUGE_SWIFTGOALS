<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SwiftGoals') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;600;700;800&family=Kavoon&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css', 'resources/js/app.js')

    <style>
        
        progress[value] {
            --background:
                radial-gradient(50% 50%, var(--c) 98%, #0000) top/10% 10% no-repeat,
                conic-gradient(var(--c) calc(var(--p)*1%), #0000 0);

            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: none;
            position: absolute;
            inset: 0;
            height: 100%;
            width: 100%;
            border-radius: 50%;
            overflow: hidden;
            background: var(--background);
            -webkit-mask: radial-gradient(50% 50%, #0000 79%, #000 80% 100%, #0000 102%)
        }

        progress[value]::-webkit-progress-bar {
            background: var(--background);
        }

        progress[value]::-webkit-progress-value {
            background: #0000;
        }

        progress[value]::-moz-progress-bar {
            background: #0000;
        }

        .progressLabel {
            --w: 160px;
            /* the width*/
            --c: #3163f7;
            /* the color */

            font-size: 20px;
            font-weight: bold;
            display: inline-grid;
            place-content: center;
            width: var(--w);
            aspect-ratio: 1;
            position: relative;
        }

        .progressLabel::before {
            content: "";
            position: absolute;
            border-radius: 50%;
            inset: 45%;
            background: var(--c);
            transform: rotate(calc(var(--p)*3.6deg)) translateY(calc(100% - var(--w)/2.635));
        }
    </style>
</head>

<body class="font-lexend">
    <!-- Page Content -->
    

    <main class="">
        {{ $slot }}
    </main>


</body>

</html>