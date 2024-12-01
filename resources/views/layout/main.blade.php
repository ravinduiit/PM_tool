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
            @vite(['resources/js/app.js'])
        @endif

    </head>
    <body>
    <div class="container-fluid d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="col-md-1 col-lg-1 p-1 d-md-block rounded-3 sidebar collapse">
            @include('layout.navbar')
        </div>

        <!-- Main Content -->
        <main class="col-md-11 col-lg-11 p-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    @include('layout.footer')

    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
