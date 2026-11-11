<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LeKopi</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0F0F0F !important;
            color: #F8F8F8 !important;
        }
        .card {
            background-color: #202020 !important;
            color: #F8F8F8 !important;
            border: 1px solid #337418 !important;
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
        .btn-dark {
            background-color: #5DD62C !important;
            border-color: #5DD62C !important;
            color: #0F0F0F !important;
            font-weight: bold;
        }
        .btn-dark:hover {
            background-color: #4bc01f !important;
            border-color: #4bc01f !important;
            color: #0F0F0F !important;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow p-4" style="width: 380px;">
        <h3 class="text-center mb-4 fw-bold" style="color: #5DD62C !important;">Octaffee Login</h3>
        
        <form action="{{ route('dashboard') }}" method="GET">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control text-white" placeholder="Masukkan nama..." required autocomplete="off">
            </div>

            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control text-white" placeholder="Masukkan password..." required>
            </div>

            <button type="submit" class="btn btn-dark w-100 py-2">Masuk ke Dashboard</button>
        </form>
    </div>
</body>
</html>