<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestionnaire;
class GestionnaireController extends Controller
{
    public function index()
    {

        $gestionnaires = Gestionnaire::all();
        return view('gestionnaire.index', compact('gestionnaires'));

    }


    /**
     * return le formulaire de creation d'un personange
     */
    public function create()
    {

        return view('gestionnaire.create');

    }


    /**
     * Enregistre un nouveau personnage dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom'=>'required',
            'prenom'=> 'required',
            'contact' => 'required'
            
        ]);


        $gestionnaire = new Gestionnaire([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'contact' => $request->get('contact')
            
        ]);


        $gestionnaire->save();
        return redirect('/')->with('success', 'gestionnaire Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un personnage spécifique
     */

    public function show($id)
    {

        $gestionnaire = gestionnaire::findOrFail($id);
        return view('gestionnaire.show', compact('gestionnaire'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $gestionnaire = Gestionnaire::findOrFail($id);

        return view('gestionnaire.edit', compact('gestionnaire'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

      

             $request->validate([
            'nom'=>'required',
            'prenom'=> 'required',
            'contact' => 'required'
            
        

        ]);
        $gestionnaire = Gestionnaire::findOrFail($id);
        $gestionnaire->nom = $request->get('nom');
        $gestionnaire->prenom = $request->get('prenom');
        $gestionnaire->contact = $request->get('contact');
       ;




        $gestionnaire->update();

        return redirect('/')->with('success', 'Etudiant Modifié avec succès');

    }




    /**
     * Supprime le personnage dans la base de données
     */
    public function destroy($id)
    {

        $gestionnaire = gestionnaire::findOrFail($id);
        $gestionnaire->delete();

        return redirect('/')->with('success', 'gestionnaire Modifié avec succès');

    }

}
