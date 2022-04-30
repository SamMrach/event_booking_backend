<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ticket;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use App\Models\user;
use App\Models\event;
use Barryvdh\DomPDF\Facade\Pdf;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets=ticket::all();
        return response()->json($tickets);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faker = Faker::create();
        $this->validate($request, [
            'utilisateur_id' => 'required',
            'event_id' => 'required',
            
        ]);
        $event=event::find($request->event_id);

        $ticket=ticket::create([
            'code'=>$faker->bothify('##?##?'),
            'utilisateur_id' => $request->utilisateur_id,
            'event_id' => $request->event_id,
            'event_name'=>$event->name,
            'event_description'=>$event->description,
            'price'=>$event->price,
        ]);
        return response()->json($ticket,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
       return $ticket;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */

    public function downloadTicket($id){
        $ticket=ticket::find($id);
        $user=User::find($ticket->utilisateur_id);
        $event=event::find($ticket->event_id);
        $pdf = PDF::loadView('ticket', ['ticket'=>$ticket,'user'=>$user,'event'=>$event]);
        
        return $pdf->download($event->name.'_'.$user->name.'.pdf');
        //return response()->json('download',201);
        //return view('ticket',['ticket'=>$ticket,'user'=>$user,'event'=>$event]);
    }
    public function eventInfo($id){
        return ticket::find($id)->event;
    }
    public function myTickets($id){
        $tickets=ticket::where('utilisateur_id',$id)->get();
        foreach($tickets as $ticket){
            //$ticket->event_name="sami";
        }
        return $tickets;
    }
}