<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Eco Hub' }}</title>
    <link rel="icon" href="{{ asset('assets/ecohub.jpg')}}" type="image/png/jpg" />
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @livewireStyles
</head>

<body>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <!-- Logo and company name here -->
            <div class="flex items-center justify-items-start">
                <img src="{{ asset('assets/ecohub.jpg') }}" alt="Logo" class="h-14 w-16 mr-3">
                <span class=" tracking-widest font-bold text-2xl warna-text font-roboto-serif">EcoHub</span>
            </div>
            <!-- Navigation -->
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/login" class="text-white bg-color-button p-2 rounded-lg">Login</a></li>
                    {{-- <li><a href="/machine-learning" class="text-gray-600 hover:hover-color hover:bg-custom-green-dark p-2 rounded-lg">Recomendation AI</a></li>
                    <li><a href="/donation" class="text-gray-600 hover:hover-color hover:bg-custom-green-dark p-2 rounded-lg">Donation</a></li>
                    <li><a href="/about" class="text-gray-600 hover:hover-color hover:bg-custom-green-dark p-2 rounded-lg">About us</a></li>
                    <li><a href="/admin"><x-bi-people class="fill-current h-auto w-auto hover:hover-color hover:bg-custom-green-dark p-2 rounded-lg"/></a></li>
                    <li><a href="/user-profile"><x-bi-people class="fill-current h-auto w-auto hover:hover-color hover:bg-custom-green-dark p-2 rounded-lg"/></a></li> --}}
                </ul>
            </nav>
        </div>
    </header>
</body>
