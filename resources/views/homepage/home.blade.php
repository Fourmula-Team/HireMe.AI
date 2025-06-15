<!DOCTYPE html>
<html lang="en">
@include('template.head')

<body class="bg-gray-100 text-gray-800">
    @include('template.header')

    <main>
        @yield('content')
    </main>

    @include('template.footer')
</body>
</html>
