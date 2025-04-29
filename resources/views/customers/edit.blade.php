@extends('layouts.app')

@section('content')
    <h1>Edit Pelanggan</h1>
    
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $customer->email }}" required>
        </div>
        
        <div class="mb-3">
            <label for="phone" class="form-label">No HP</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $customer->phone }}" required>
        </div>
        
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea name="address" id="address" class="form-control" rows="3" required>{{ $customer->address }}</textarea>
        </div>
        
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
@endsection