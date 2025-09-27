<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="./dist/libs/jsvectormap/dist/jsvectormap.css?1758770987" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="./dist/css/tabler.css?1758770987" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <link href="./dist/css/tabler-flags.css?1758770987" rel="stylesheet" />
    <link href="./dist/css/tabler-socials.css?1758770987" rel="stylesheet" />
    <link href="./dist/css/tabler-payments.css?1758770987" rel="stylesheet" />
    <link href="./dist/css/tabler-vendors.css?1758770987" rel="stylesheet" />
    <link href="./dist/css/tabler-marketing.css?1758770987" rel="stylesheet" />
    <link href="./dist/css/tabler-themes.css?1758770987" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    @stack('css')
</head>

<body>
  <script src="./dist/js/tabler-theme.min.js?1758770987"></script>
    <div class="page">
        @include('layout.admin.partials.sidebar')
        @yield('content')
        @include('layout.admin.partials.footer')
    </div>
    <!-- Libs JS -->

    <script src="{{ asset('assets/js/demo-theme.min.js?1692870487') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/libs/jsvectormap/dist/maps/world.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/libs/jsvectormap/dist/maps/world-merc.js?1692870487') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/tabler.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/js/demo.min.js?1692870487') }}" defer></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

    @stack('js')
</body>

</html>
