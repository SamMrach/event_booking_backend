<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\event;
use App\Models\ticket;
use App\Models\Utilisateur;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=Utilisateur::all();
        $events=event::all();
        $tickets=ticket::latest()->take(6)->get();
        $sum=0;
        foreach($tickets as $ticket){
           $sum+=$ticket->event->price; 
        }
        $orders=$tickets->count();
        return view('home',['orders'=>$orders,'users'=>$users,'events'=>$events,'tickets'=>$tickets,'sum'=>$sum]);
    }
}