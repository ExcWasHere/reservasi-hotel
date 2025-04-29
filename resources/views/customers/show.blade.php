@extends('layouts.app')

@section('content')
    <h1>Detail Pelanggan</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $customer->name }}</h5>
            <div class="mb-3">
                <strong>Email:</strong> {{ $customer->email }}
            </div>
            <div class="mb-3">
                <strong>No HP:</strong> {{ $customer->phone }}
            </div>
            <div class="mb-3">
                <strong>Alamat:</strong> {{ $customer->address }}
            </div>
            
            <div class="d-flex gap-2">
                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection