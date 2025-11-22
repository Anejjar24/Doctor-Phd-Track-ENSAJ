<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Users\updateTeseRequest;

class editTheseController extends Controller
{
   
    public function edit()
    {
        $userth =auth()->user();
        return view('dashfinal.user.modifier',compact('userth'));
    }

    public function update(updateTeseRequest $request)
    {
        $userth =auth()->user();
        
        
     $validatedData = $request->validate([
        'titre'=>'nullable|string',
                'description'=>'nullable|string',
                'laboratoire'=>'nullable|string',
                'date_inscription'=>'nullable|date',
                'directeur'=>'nullable|string',
                'codirecteur'=>'nullable|string',
                'photo' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            // Add any other validation rules here
        ]);

        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $path='uploads/doctorants/images/';
            $file->move($path, $filename);
          
        
        if(File::exists($userth->photo)){
            File::delete($userth->photo);
        }
        $userth->photo =$path.$filename;
    }
       
        $userth->titre = $validatedData['titre'];
        $userth->description = $validatedData['description'];
        // Assign other request data to userth attributes as needed
        $userth->laboratoire = $validatedData['laboratoire'];
        $userth->date_inscription = $validatedData['date_inscription'];

        $userth->directeur = $validatedData['directeur'];
        $userth->codirecteur = $validatedData['codirecteur'];
       

       // $userth->photo = $validatedData['photo'];
       
        
    
       
        $userth->save();
        Alert::success('Succès', 'Éditer avec succès');
        return back();
       
    }



}
