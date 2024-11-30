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
        <!-- Header Section -->
        <header>
            <div class="p-1 position-absolute">
                @include('layout.navbar')
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <!-- Main Content -->
                <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>

        <!-- Footer Section -->
        <footer>
            @include('layout.footer')
        </footer>

        @yield('script')

    </body>
</html>
