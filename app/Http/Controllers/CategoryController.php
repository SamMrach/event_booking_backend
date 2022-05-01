<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categories=category::all();
        return View('categories',['categories'=>$categories]);
    }
    public function Add(){
        return View('addCategorie');
    }
    public function submit(Request $request){
        $requestData=$request->all();
        //dd($request->all());
        $filename=$request->file('icon')->getClientOriginalName();
        $path=$request->file('icon')->storeAs('images',$filename,'public');
        $requestData['icon']='storage/'.$path;
        category::create($requestData);
        return redirect()->to('/categories');
    }
    public function delete($id){
        $categorie=category::find($id);
        $categorie->delete();
        return redirect()->to('/categories');
    }
}