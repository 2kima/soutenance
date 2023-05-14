<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {

        $etudiants = Etudiant::all();
        return view('etudiant.index', compact('etudiants'));

        // $etudiant = Etudiant::orderBy('id','desc')->paginate(5);
        //return view('etudiant.index', compact('etudiants'));

    }


    /**
     * return le formulaire de creation d'un personange
     */
    public function create()
    {

        return view('etudiant.create');

    }


    /**
     * Enregistre un nouveau personnage dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom'=>'required',
            'prenom'=> 'required',
            'email' => 'required',
            'site' => 'required',
            'filiere'=>'required',
            'niveauEtude'=>'niveauEtude'
        ]);


        $etudiant = new Etudiant([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email'),
            'site' => $request->get('site'),
            'filiere' => $request->get('filiere'),
            'niveauEtude' => $request->get('niveauEtude')
        ]);


        $etudiant->save();
        return redirect('/')->with('success', 'Etudiant Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un personnage spécifique
     */

    public function show($id)
    {

        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.show', compact('etudiant'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $etudiant = Etudiant::findOrFail($id);

        return view('etudiant.edit', compact('etudiant'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

      

             $request->validate([
            'nom'=>'required',
            'prenom'=> 'required',
            'email' => 'required',
            'site' => 'required',
            'filiere'=>'required',
            'niveauEtude'=>'required'
        

        ]);
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->nom = $request->get('nom');
        $etudiant->prenom = $request->get('prenom');
        $etudiant->email = $request->get('email');
        $etudiant->site = $request->get('site');
        $etudiant->filiere = $request->get('filiere');
        $etudiant->niveauEtude = $request->get('niveauEtude');




        $etudiant->update();

        return redirect('/')->with('success', 'Etudiant Modifié avec succès');

    }




    /**
     * Supprime le personnage dans la base de données
     */
    public function destroy($id)
    {

        $etudiant = Personnage::findOrFail($id);
        $etudiant->delete();

        return redirect('/')->with('success', 'Etudiant Modifié avec succès');

    }

}
