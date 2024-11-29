<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <title>@yield('title', 'Default Title')</title>
            <!-- Styles / Scripts -->
            @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
                @vite([ 'resources/js/app.js'])
            @endif
    </head>
    <body>
        <!-- Header Section -->
        <header>
            @yield('navbar')
        </header>

        <!-- Main Content -->
        <main>
            @yield('content') <!-- Section for page-specific content -->
        </main>

        <!-- Footer Section -->
        <footer>
            @yield('footer')
        </footer>

        @yield('script')

    </body>
</html>
