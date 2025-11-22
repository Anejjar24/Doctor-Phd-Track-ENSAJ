<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Users\zipUpdateRequest;

class zipController extends Controller
{

    public function edit()
    {
        $userth =auth()->user();
        return view('dashfinal.user.uploadPage',compact('userth'));
       
    }

    public function show()
{
    $userth =auth()->user();
    return view('dashfinal.user.downloadPage',compact('userth'));
   
}
    public function upload(zipUpdateRequest $request)
{
 
    $userth =auth()->user();


    $validatedData = $request->validate([
   
        'zip_file' => 'nullable|mimes:zip', 
    ]);

    if($request->hasfile('zip_file'))
        {

    $file = $request->file('zip_file');

    $extenstion = $file->getClientOriginalExtension();
    $fileName = time().'.'.$extenstion;
    $path='uploads/doctorants/zipFiles/';
    $file->move($path, $fileName);
    if(File::exists($userth->zip_file)){
        File::delete($userth->zip_file);
        }
        $userth->zip_file =$path.$fileName;
        
        }

        

        $userth->save();
        Alert::success('Succès', 'Dossier saisi avec succès');
    return back();
}

public function show()
{
    $userth =auth()->user();
    return view('dashfinal.user.downloadPage',compact('userth'));
   
}


public function telecharger()
{
    
    $path=public_path('fichier-a-telecharger/telecharger.zip');
    Alert::success('Succès', 'Documents téléchargés avec succès');
    return response()->download($path);
}



//ajouter middleware soumettre
public function download()
{
    $userth =auth()->user();
    Alert::success('Succès', 'Votre dossier a été téléchargé avec succès');
    return response()->download($userth->zip_file);
}




   
}
