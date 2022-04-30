<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = ['name', 'status','category', 'description','price','localisation','image','NumberOfSeats','reservedSeats','date']; 
    public function category(){
        return $this->belongsTo(catgeory::class);
    }
    public function tickets(){
        return $this->hasMany(ticket::class);
    }
    use HasFactory;
}