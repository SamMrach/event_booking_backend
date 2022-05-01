<?php

namespace App\Http\Controllers;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users=Utilisateur::paginate(5);
        return View('utilisateurs',['utilisateurs'=>$users]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $user=Utilisateur::find($id);
        $user->delete();
        return redirect()->to('/users');
    }
}