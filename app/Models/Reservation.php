<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    protected $fillable = ['customer_id', 'room_number', 'check_in_date', 'check_out_date'];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}