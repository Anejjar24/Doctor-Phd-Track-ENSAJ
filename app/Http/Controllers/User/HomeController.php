<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Users\updateProfileRequest;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //on a supprimet la méthode construct qui contient middleware 'auth'
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $user=auth()->user();
        return view('dashfinal.user.user-main',compact('user'));
    }



   



   /* public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => ['required', 'email',Rule::unique('votre_table')->ignore($id)],
            'CIN' => 'required',
            'date_de_naissance' => 'required',
            'CIN' => 'required',

            'titre' => 'required',
            'description' => 'required',
            'laboratoire' => 'required',
            'date_inscription' => 'required',
            'directeur' => 'required',
            'codirecteur' => 'required',
            'photo' => 'required',

            
            // Ajoutez des règles de validation pour les autres champs
        ]);

        $User = User::find($id);
        $User->update($validatedData);

    return redirect()->route('votre_route')->with('success', 'Données mises à jour avec succès');
    }
    
    


    //



   /* public function pagehome()
    {
        return view('home.homepage');
    }
    */


    /*public function edit()
    {
        $user = auth()->user();
        return view('dashfinal.user.modifier', compact('user'));
    }


    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
           
           // 'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => ['required', 'email',Rule::unique('votre_table')->ignore($user->id)],
            'CIN' => 'required|string|max:10',
            'date_de_naissance' => 'required',
           

            'titre' => 'required',
            'description' => 'required',
            'laboratoire' => 'required',
            'date_inscription' => 'required',
            'directeur' => 'required|string|max:255',
            'codirecteur' => 'required|string|max:255',
            'photo' => 'required',
        ]);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->CIN = $request->CIN;
        $user->date_de_naissance = $request->date_de_naissance;


        $user->titre = $request->titre;
        $user->description = $request->description;
        $user->laboratoire = $request->laboratoire;
        $user->date_inscription = $request->date_inscription;
        $user->directeur = $request->directeur;
        $user->codirecteur = $request->codirecteur;
        $user->photo = $request->photo;


        $user->save();

    return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }

    */

    
}
