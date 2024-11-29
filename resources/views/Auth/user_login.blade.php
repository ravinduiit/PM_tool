<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <title>Colorful Project Management Login</title>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite([ 'resources/js/app.js'])
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="adminManin">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="login-container">
                            <div class="card-body p-5 text-center">
                                <!-- Logo or Title -->
                                <div class="mb-4">
                                    <h2 class="fw-bold mb-2 text-uppercase gradient-custom-2 bg-clip-text text-transparent">
                                        Project Management
                                    </h2>
                                </div>
                                <!-- Google Login -->
                                <div class="d-grid">
                                    <button class="btn btn-lg google-btn" type="button" id="googleLoginBtn">
                                        <i class="bi bi-google"></i>
                                        Continue with Google
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
