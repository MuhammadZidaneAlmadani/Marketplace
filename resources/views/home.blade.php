<!-- resources/views/home.blade.php -->

@extends('layouts.app') <!-- Pastikan layouts.app sudah tersedia atau sesuaikan dengan layout Anda -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat datang di halaman Dashboard!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
