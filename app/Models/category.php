<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class category extends Model
{
    protected $fillable=['name','description','icon'];
    public function events(){
        return this->hasMany(Event::class);
    }
    use HasFactory;
}