<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Hub</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    

    <!-- Custom CSS -->
    <style>
        body { background: #f8f9fb; }
        .hero-section { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #fff; text-align: center; padding: 100px 0; }
        .btn-primary { background: linear-gradient(135deg, #667eea, #764ba2); border: none; }
        .service-card, .customer-card { border-radius: 8px; transition: 0.3s; }
        .service-card:hover, .customer-card:hover { transform: translateY(-5px); box-shadow: 0 6px 20px rgba(0,0,0,0.1); }
        @media (max-width: 768px) {
            .hero-section { padding: 60px 20px; font-size: 14px; }
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Header -->
    @include('frontend.layouts.header')

    <!-- Main Content -->
    @yield('content')

    <!-- Popup Form -->
    @include('frontend.popup-form')
    @include('frontend.register-vender')
    <!-- Footer -->
    @include('frontend.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
