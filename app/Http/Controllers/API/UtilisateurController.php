<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Utilisateur::all();
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email|unique:utilisateurs',
            'password' => 'required|min:6',
            'telephone'=>'required|min:10',
        ]);*/
        $user=Utilisateur::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'telephone'=>$request->telephone,
        ]);
        return response()->json($user,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(int $utilisateur)
    {
        $user=Utilisateur::find($utilisateur);
        return response()->json($user);
       //return $utilisateur;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $utilisateur)
    {
        // La validation de données
    

    // On modifie les informations de l'utilisateur
    $user=Utilisateur::find($utilisateur);
    $user->update([
        "name" => $request->name,
        "email" => $request->email,
        "password" => bcrypt($request->password),
        "telephone"=>$request->telephone,
        "adress"=>$request->adress,
        "photo"=>$request->photo,
    ]);

    // On retourne la réponse JSON
    return response()->json($user,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $utilisateur)
    {
        $user=Utilisateur::find($utilisateur);
        $user->delete();
        return response()->json(201);
    }
    /**
     * login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        $fields=$request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user=Utilisateur::Where('email',$fields['email'])->first();
        if(!$user || !Hash::check($fields['password'],$user->password)){
            return response([
                'message'=>'Invalid Credentials'
            ], 401);
        }
        //$token=$user->createToken('myapptoken')->plainTextToken;
        $response= [
            'user' => $user,
            
        ];

        return response($response, 201);
    }
}