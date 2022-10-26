<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title??'Dashboard' }}</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('ui/dashboard/css/bootstrap.min.css') }}" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('ui/dashboard/css/dashboard.css') }}" rel="stylesheet" />
</head>

<body>
    <x-partials.header />

    <div class="container-fluid">
        <div class="row">
            <x-partials.sidebar />

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <!-- child content -->
                {{ $slot }}
            </main>
        </div>
    </div>

    <script src="{{ asset('ui/dashboard/js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="{{ asset('ui/dashboard/js/dashboard.js') }}"></script>
</body>

</html>