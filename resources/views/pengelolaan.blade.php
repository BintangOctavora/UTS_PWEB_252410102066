@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Pengelolaan Menu Octaffee</h2>
    <span class="text-muted">Login sebagai: <strong>{{ $username}}</strong></span>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                <tr>
                    <td>{{ $menu['id'] }}</td>
                    <td class="fw-bold">{{ $menu['nama'] }}</td>
                    <td>{{ $menu['kategori'] }}</td>
                    <td>{{ $menu['harga'] }}</td>
                    <td>
                        <span class="badge {{ $menu['status'] == 'Tersedia' ? 'bg-success' : 'bg-danger' }}">
                            {{ $menu['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection