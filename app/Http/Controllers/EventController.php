<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EventController;
use App\Models\event;
use App\Models\category;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $events=Event::paginate(5);
        //dd($events);
        return View('events',['events'=>$events]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\View
     */
    public function Create(){
        $categories=category::all();
        return View('AddEvent',['categories'=>$categories]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SubmitEvent(Request $request){
        $requestData=$request->all();
        //dd($request->file('image')->getClientOriginalName());
        $fileName=$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('images',$fileName,'public');
        $requestData['image']='/storage/'.$path;
        //dd($requestData);
        event::create($requestData);
        return redirect()->to('/events');
    }
    public function Edit($id){
      $event=Event::find($id);
      $categories=category::all();
      $selectedCategorie=$event->category;
      return View('editEvent',['event'=>$event,'categories'=>$categories,'selectedCategorie'=>$selectedCategorie]);
    }
    public function Update($id,Request $request){
        $event=Event::find($id);
        //dd($request->image);
        $event->update(["name"=>$request->name,"description"=>$request->description,"price"=>$request->price,"localisation"=>$request->localisation,"NumberOfSeats"=>$request->NumberOfSeats,"status"=>$request->status,"date"=>$request->date]);
        
        //$requestData['image']='/storage/'.$path;
        return redirect()->to('/events');
    }
    public function Delete($id){
        $event=Event::find($id);
        $event->delete();
        return redirect()->to('/events');
    }
    public function UpdatePhoto($id,Request $request){
        $event=Event::find($id);
        //dd($request->image);
        $fileName=$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('images',$fileName,'public');
        $event->update(["image"=>'/storage/'.$path]);
        return redirect()->action([EventController::class,'Edit'],['id'=>$id]);
        //return redirect()->to('/events');
    }
}