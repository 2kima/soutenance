<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
class UtilisateurController extends Controller
{
    public function index()
    {

        $utilisateurs = Utilisateur::all();
        return view('utilisateur.index', compact('utilisateurs'));

    }


    /**
     * return le formulaire de creation d'un personange
     */
    public function create()
    {

        return view('utilisateur.create');

    }


    /**
     * Enregistre un nouveau personnage dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom'=>'required',
            'prenom'=> 'required',
            'contact' => 'required',
             'typeUtilisateur' => 'required'
            
        ]);


        $gestionnaire = new Gestionnaire([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'contact' => $request->get('contact'),
            'typeUtilisateur' => $request->get('typeUtilisateur')
            
        ]);


        $utilisateur->save();
        return redirect('/')->with('success', 'utilisateur Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un personnage spécifique
     */

    public function show($id)
    {

        $utilisateur = Utilisateur::findOrFail($id);
        return view('utilisateur.show', compact('utilisateur'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $utilisateur = Utilisateur::findOrFail($id);

        return view('utilisateur.edit', compact('utilisateur'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

      

             $request->validate([
            'nom'=>'required',
            'prenom'=> 'required',
            'contact' => 'required',
            'typeUtilisateur' => 'required'

            
        

        ]);
        $utilisateur = Gtilisateur::findOrFail($id);
        $utilisateur->nom = $request->get('nom');
        $utilisateur->prenom = $request->get('prenom');
        $utilisateur->contact = $request->get('contact');
       $utilisateur->typeUtilisateur = $request->get('typeUtilisateur');




        $utilisateur->update();

        return redirect('/')->with('success', 'utilisateur Modifié avec succès');

    }




    /**
     * Supprime le personnage dans la base de données
     */
    public function destroy($id)
    {

        $utilisateur = Utilisateur::findOrFail($id);
        $utilisateur->delete();

        return redirect('/')->with('success', 'utilisateur Modifié avec succès');

    }

}
