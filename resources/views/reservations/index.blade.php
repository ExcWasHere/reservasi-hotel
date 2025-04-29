@extends('layouts.app')

@section('content')
    <h1>Daftar Reservasi Hotel</h1>
    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Nomor Kamar</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $index => $reservation)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <a href="{{ route('customers.show', $reservation->customer->id) }}">
                                {{ $reservation->customer->name }}
                            </a>
                        </td>
                        <td>{{ $reservation->room_number }}</td>
                        <td>{{ date('d-m-Y', strtotime($reservation->check_in_date)) }}</td>
                        <td>{{ date('d-m-Y', strtotime($reservation->check_out_date)) }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ms-1">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection