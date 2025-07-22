<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Website' }}</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optional: Font & Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Optional: Alpine.js for interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">

        <!-- Logo kiri -->
        <div class="text-2xl font-bold text-blue-600 flex items-center space-x-2  mx-[204px] ">
            <a href="{{ url('/') }}" class="text-blue-600 font-bold">HireMe.AI</a>
        </div>

        <!-- Nav tengah -->
        <nav class="hidden md:flex space-x-6">
            <a href="{{ url('/recruiter-dashboard') }}"
                class="pb-2 {{ request()->is('recruiter-dashboard') ? 'text-blue-600 font-bold border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600 font-bold' }}">
                Dashboard
            </a>
            <a href="{{ url('/jobs') }}"
                class="pb-2 {{ request()->is('jobs') ? 'text-blue-600 font-bold border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600 font-bold' }}">
                Jobs
            </a>
            <a href="{{ url('/candidates') }}"
                class="pb-2 {{ request()->is('candidates') ? 'text-blue-600 font-bold border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600 font-bold' }}">
                Candidates
            </a>
            <a href="{{ url('/analytic') }}"
                class="pb-2 {{ request()->is('analytic') ? 'text-blue-600 font-bold border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600 font-bold' }}">
                Analytic
            </a>
        </nav>

        <div class="relative mx-[204px]" x-data="{ open: false }">
            <div class="flex items-center space-x-3 cursor-pointer" @click="open = !open">
                <i class="bi bi-bell text-lg text-gray-700"></i>
                <span class="font-bold text-sm text-gray-800">Hi, Recruiter</span>
            </div>

            <div x-show="open" @click.away="open = false"
                class="absolute right-0 mt-2 w-32 bg-white border rounded shadow-lg z-50">
                <a href="/login" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Logout</a>
            </div>
        </div>

    </div>
</header>

<body class="flex flex-col min-h-screen">
    <div id="layout-wrapper" class="flex-grow">
