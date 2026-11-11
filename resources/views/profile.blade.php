@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm text-center p-4">
            <div class="mb-3">
                <div class="bg-secondary text-white rounded-circle d-inline-flex align-items-center justify-content-center fw-bold fs-1" style="width: 80px; height: 80px;">
                    {{ strtoupper(substr($username ?? 'U', 0, 1)) }}
                </div>
            </div>
            <h3>{{ $username ?? 'Administrator' }}</h3>
            <p class="text-white">Barista / Pengelola Kedai Octaffee</p>
            <hr>
            <p class="text-start"><strong>Status Akun:</strong> Aktif</p>
            <p class="text-start"><strong>Hak Akses:</strong> Atmint</p>
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn btn-outline-dark mt-3 text-white">Kembali ke Dashboard</a>
        </div>
    </div>
</div>
@endsection