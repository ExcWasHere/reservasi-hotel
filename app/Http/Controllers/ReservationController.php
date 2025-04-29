<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Customer;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('customer')->get();
        return view('reservations.index', compact('reservations'));
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        $customers = Customer::all();
        return view('reservations.edit', compact('reservation', 'customers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required',
            'room_number' => 'required',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after_or_equal:check_in_date',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->update($request->all());

        return redirect()->route('reservations.index')
            ->with('success', 'Reservasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservations.index')
            ->with('success', 'Reservasi berhasil dihapus');
    }
}