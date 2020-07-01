<?php

namespace App\Http\Controllers;
use App\Inscription;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function inscriptionPost(Request $request){

    $utilisateur=new Inscription;
    $utilisateur->nom=$request->input('nom');
    $utilisateur->prenom=$request->input('prenom');
    $utilisateur->telephone=$request->input('telephone');
    $utilisateur->email=$request->input('email');
    $utilisateur->adresse=$request->input('adresse');
    $utilisateur->save();
    return response()->json(['utilisateur'=>$utilisateur],201);

    }
}
