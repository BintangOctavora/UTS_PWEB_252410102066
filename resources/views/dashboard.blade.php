@extends('layouts.app')

@section('content')
<div class="row align-items-center min-vh-75 py-4">
    <div class="col-lg-6 mb-5 mb-lg-0">
        <span class="badge px-3 py-2 mb-3 rounded-pill" style="background-color: rgba(93, 214, 44, 0.15); color: #5DD62C; border: 1px solid #337418;">
            Welcome back, {{ $username}}!
        </span>
        <h1 class="display-3 fw-bold mb-4" style="color: #F8F8F8; line-height: 1.1;">
            Transform <br>
            <span style="color: #5DD62C;">the way you</span> <br>
            manage coffee.
        </h1>
        <p class="fs-5 text-secondary mb-4 col-lg-10">
            Sistem kedai kopi rumahan Octaffee
        </p>
        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-lg px-4 py-3 fw-bold rounded-pill shadow-lg" style="background-color: #5DD62C; color: #0F0F0F; border: none; transition: 0.3s;">
                Kelola Menu Sekarang &rarr;
            </a>
        </div>
        
        <div class="mt-5 pt-3 border-top border-secondary d-flex align-items-center gap-3 text-secondary small"></div>
    </div>

    <div class="col-lg-6">
        <div class="position-relative p-4 rounded-4" style="background: linear-gradient(135deg, rgba(32, 32, 32, 0.8), rgba(15, 15, 15, 0.9)); border: 1px solid #337418; backdrop-filter: blur(10px); box-shadow: 0 20px 40px rgba(0,0,0,0.6);">
            
            <div class="p-3 mb-3 rounded-3" style="background-color: rgba(15, 15, 15, 0.7); border: 1px solid rgba(51, 116, 24, 0.5);">
                <div class="d-flex justify-content-between text-secondary small mb-1">
                    <span>Aplikasi</span>
                    <span>Status: Online</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold fs-5 text-white">Octaffee System</span>
                    <span class="badge bg-success" style="background-color: #5DD62C !important; color: #0F0F0F;">Ready</span>
                </div>
            </div>

            <div class="text-center my-2">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle shadow" style="width: 40px; height: 40px; background-color: #5DD62C; color: #0F0F0F; font-weight: bold;">
                    &darr;
                </div>
            </div>

            <div class="p-3 rounded-3" style="background-color: rgba(15, 15, 15, 0.7); border: 1px solid rgba(51, 116, 24, 0.5);">
                <div class="d-flex justify-content-between text-secondary small mb-1">
                    <span>Logged User</span>
                    <span>Role: Barista</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold fs-5 text-white">{{ $username}}</span>
                    <span class="text-success fw-bold" style="color: #5DD62C !important;">Active Session</span>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection