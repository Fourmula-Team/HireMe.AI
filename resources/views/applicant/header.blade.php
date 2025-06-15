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
        <div class="container mx-auto px-4 py-4 flex items-center relative">
          
          <!-- Logo kiri -->
          <div class="text-2xl font-bold text-blue-600">
            <a href="{{ url('/') }}">Hire Me</a>
          </div>
      
          <!-- Nav center -->
          <nav class="hidden md:flex space-x-6 absolute left-1/2 transform -translate-x-1/2">
            <a href="{{ url('/user-dashboard') }}" class="text-gray-700 hover:text-blue-600">Dashboard</a>
            <a href="{{ url('/user-interview') }}" class="text-gray-700 hover:text-blue-600">AI Interview</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Personality Test</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Gamification</a>
          </nav>
      
        </div>
      </header>

      <body class="flex flex-col min-h-screen">
        <div id="layout-wrapper" class="flex-grow">