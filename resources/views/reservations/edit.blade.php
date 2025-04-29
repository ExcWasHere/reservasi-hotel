@extends('layouts.app')

@section('content')
    <h1>Edit Reservasi</h1>
    
    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="customer_id" class="form-label">Pelanggan</label>
            <select name="customer_id" id="customer_id" class="form-select">
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $reservation->customer_id == $customer->id ? 'selected' : '' }}>
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="room_number" class="form-label">Nomor Kamar</label>
            <input type="text" name="room_number" id="room_number" class="form-control" value="{{ $reservation->room_number }}" required>
        </div>
        
        <div class="mb-3">
            <label for="check_in_date" class="form-label">Tanggal Check In</label>
            <input type="date" name="check_in_date" id="check_in_date" class="form-control" value="{{ $reservation->check_in_date }}" required>
        </div>
        
        <div class="mb-3">
            <label for="check_out_date" class="form-label">Tanggal Check Out</label>
            <input type="date" name="check_out_date" id="check_out_date" class="form-control" value="{{ $reservation->check_out_date }}" required>
        </div>
        
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
@endsection