<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
//    protected $guarded = [];
    protected $fillable=[
        'name',
        'board',
        'wifi',
        'projector',
        'seats',
        'image',
        'description',];
    public function Booking(){
        return $this->belongsTo(Booking::class);
    }
    public function Bookings(){
        return $this->hasMany(Booking::class);
    }
}
