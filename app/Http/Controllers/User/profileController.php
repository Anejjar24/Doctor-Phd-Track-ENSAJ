<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Users\updateProfileRequest;
use RealRashid\SweetAlert\Facades\Alert;

class profileController extends Controller

{
    

    public function mettreEtat()
    {
        $user =auth()->user();
        $user->etat=1;
        $user->save();

        Alert::success('Succès', 'Soummis avec succès');
        return redirect()->back();
    }

    


    public function completer()
    {
        $user =auth()->user();
        return view('dashfinal.user.completer');
    }

    public function edit()
    {
        $user =auth()->user();
        return view('dashfinal.user.edit',compact('user'));
    }


    public function update(updateProfileRequest $request)
    {
        $user =auth()->user();

        $validatedData = $request->validate([
            'prenom'=>'required|string',
            'nom'=>'required|string',
            'CIN'=>'required|string',
            'date_de_naissance'=>'required|date',
           
            'telephone'=>'required|string',
            'adresse'=>'required|string',


            ///////////////

            

           
            // Add any other validation rules here
        ]);

        $user->nom = $validatedData['nom'];
        $user->prenom = $validatedData['prenom'];
        // Assign other request data to user attributes as needed
        $user->CIN = $validatedData['CIN'];
        $user->date_de_naissance = $validatedData['date_de_naissance'];

        $user->telephone = $validatedData['telephone'];
        $user->adresse = $validatedData['adresse'];

       

        //////////

        
       
       

       
        $user->save();
        Alert::success('Succès', 'Éditer avec succès');
       
        
        return back();
       
    }

}
