<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $fillable=['name','email','password','telephone','adress','photo'];
    public function tickets(){
        return $this->hasMany(ticket::class);
    }
    use HasFactory;
}