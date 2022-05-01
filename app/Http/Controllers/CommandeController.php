<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\user;
use App\Models\event;
use App\Http\Controllers\CommandeController;
use Barryvdh\DomPDF\Facade\Pdf;
class CommandeController extends Controller
{
public function index(){
    $commandes=ticket::paginate(5);
    //dd($commandes->event);
    return view('commandes',['tickets'=>$commandes]);
}
public function submit(){
    return view('commandes');
}
public function delete($id){
    $ticket=ticket::find($id);
    $ticket->delete();
    return redirect()->action([CommandeController::class,'index']);
}
public function showTicket($id){
    $ticket=ticket::find($id);
    $user=User::find($ticket->utilisateur_id);
    $event=event::find($ticket->event_id);
    $pdf = PDF::loadView('ticket', ['ticket'=>$ticket,'user'=>$user,'event'=>$event]);
    
    //return $pdf->download($event->name.'_'.$user->name.'.pdf');
    return view('ticket',['ticket'=>$ticket,'user'=>$user,'event'=>$event]);
}

}