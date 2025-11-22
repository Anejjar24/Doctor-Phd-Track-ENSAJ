<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class DashboardController extends Controller
{

  /*  public function download($id)
{
    $user = User::findOrFail($id);
    Alert::success('Succès', 'Votre dossier a été téléchargé avec succès');
    return response()->download($user->zip_file);
    
}
*/

public function download($id)
{
    $user = User::findOrFail($id);

    // Vérifier si le fichier existe
    if ($user->zip_file !== null) {
        // Si le fichier existe, télécharger
        
        return response()->download($user->zip_file);
    } else {
        // Si le fichier n'existe pas, afficher une alerte d'erreur
        Alert::error('Erreur', 'Le fichier n\'existe pas')->persistent(true);
        return redirect()->back();
    }
}

    


    public function showMotif($id){
        $user = User::findOrFail($id);

        return view('dashfinal.admin.candidatures.afficheMotif',compact('user'));
    }

    public function choix($id){
        $user = User::findOrFail($id);

        return view('dashfinal.admin.candidatures.choixrefuser',compact('user'));
    }


    public function motif($id){
        $user = User::findOrFail($id);

        return view('dashfinal.admin.candidatures.motif',compact('user'));
    }

    public function updateMotif(Request $request, $id){
        $request->validate([
            'motif_de_refus' => 'required|string', // Assurez-vous que le champ 'description' est requis et de type string
        ]);
        $user = User::findOrFail($id);

        
        $user->motif_de_refus = $request->motif_de_refus;
        $user->save();
        
        $user->etat=3;

        $user->save();
        Alert::success('Succès', 'Le doctorant a été refusé avec succès');
        
        return redirect()->route('candidature');
       
        
    }

    public function dashboard(){

        return view('dashfinal.admin.admin-main');
    }

    public function doctorants(){
        $users = User::where('is_admin', 0)->get();

        return view('dashfinal.admin.doctorants.doc',compact('users'));
    }
   

    public function details($id){
        $user = User::findOrFail($id); 

        return view('dashfinal.admin.doctorants.details',compact('user'));
    }

    public function infopers($id){
        $user = User::findOrFail($id); 

        return view('dashfinal.admin.doctorants.infoperson',compact('user'));
    }
    public function infothese($id){
        $user = User::findOrFail($id); 

        return view('dashfinal.admin.doctorants.infothese',compact('user'));
    }
    
//candidature




    public function showAcceptee(){
        $users = User::where('is_admin', 0)
                  ->where('etat', 2)
                  ->get();

        return view('dashfinal.admin.candidatures.accepte',compact('users'));
    }
    public function showRefusee(){
        $users = User::where('is_admin', 0)
        ->where('etat', 3)
        ->get();

        return view('dashfinal.admin.candidatures.refusee',compact('users'));
    }
    public function showEncours(){
        $users = User::where('is_admin', 0)
                  ->where('etat', 1)
                  ->get();

        return view('dashfinal.admin.candidatures.encours',compact('users'));
    }

    public function showBrouillon(){
        $users = User::where('is_admin', 0)
                  ->where('etat', 0)
                  ->get();

        return view('dashfinal.admin.candidatures.brouillon1',compact('users'));
    }

  

    public function candidature(){
        $users = User::where('is_admin', 0)
                        ->where('etat', 1)->get();

        return view('dashfinal.admin.candidatures.main',compact('users'));
    }


    public function accepter($id){
        $doctorant= User::findOrFail($id); 

        $doctorant->etat=2;
        $doctorant->save();
        Alert::success('Succès', 'Le doctorant a été accépté avec succès');

        return redirect()->back();
    }
    public function refuser($id){
        $doctorant = User::findOrFail($id); 
        $doctorant->etat=3;

        $doctorant->save();
        Alert::success('Succès', 'Le doctorant a été refusé avec succès');

    return redirect()->back();
    }


    


    //
}
