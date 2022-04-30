<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable=['code','utilisateur_id','event_id','path','event_name','event_description','price'];
    
    public function utilisateur(){
        return $this->belongsTo(utilisateur::class);
    }
    public function event(){
        return $this->belongsTo(event::class);
    }
    
    use HasFactory;
}