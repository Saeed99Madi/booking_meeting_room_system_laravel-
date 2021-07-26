<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $dates = ['start_date','end_date'];

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function customer(){
        return $this->belongsTo(User::class , 'user_id');
    }


}
