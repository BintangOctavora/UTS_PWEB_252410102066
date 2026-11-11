<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octaffee - Management Kafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #0F0F0F !important;
            color: #F8F8F8 !important;
        }
        .navbar {
            background-color: #202020 !important;
            border-bottom: 1px solid #337418;
        }
        .card {
            background-color: #202020 !important;
            color: #F8F8F8 !important;
            border: 1px solid #337418 !important;
        }
        .table {
            color: #F8F8F8 !important;
            background-color: #202020 !important;
        }
        .table-dark {
            background-color: #337418 !important;
            color: #F8F8F8 !important;
        }
        .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.02) !important;
            color: #F8F8F8 !important;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(93, 214, 44, 0.07) !important;
            color: #F8F8F8 !important;
        }
        .btn-dark, .btn-primary {
            background-color: #5DD62C !important;
            border-color: #5DD62C !important;
            color: #0F0F0F !important;
            font-weight: bold;
        }
        .btn-dark:hover, .btn-primary:hover {
            background-color: #4bc01f !important;
            border-color: #4bc01f !important;
            color: #0F0F0F !important;
        }
        footer {
            background-color: #202020 !important;
            border-top: 1px solid #337418;
        }
        .form-control {
            background-color: #0F0F0F !important;
            color: #F8F8F8 !important;
            border-color: #337418 !important;
        }
        .form-control:focus {
            background-color: #0F0F0F !important;
            color: #F8F8F8 !important;
            border-color: #5DD62C !important;
            box-shadow: 0 0 0 0.25rem rgba(93, 214, 44, 0.25);
        }
        .badge.bg-success {
            background-color: #5DD62C !important;
            color: #0F0F0F !important;
            font-weight: bold;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('components.navbar')

    <main class="container my-4 flex-fill">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>