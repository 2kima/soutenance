@extends('layouts.app')


@section('content')


    <h1>Modifier Personnage</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('etudiant/'. $etudiant->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="{{ $etudiant->nom }}">

        </div>

        <div class="form-group mb-3">

            <label for="prenom">prenom:</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrer prenom" name="prenom" value="{{ $etudiant->prenom }}">

        </div>

        <div class="form-group mb-3">

            <label for="email">email:</label>
            <input type="email" class="form-control" id="email" placeholder="email" name="email" value="{{ $etudiant->email }}">

        </div>

        <div class="form-group mb-3">

            <label for="site">email:</label>
            <input type="text" class="form-control" id="site" placeholder="site" name="site" value="{{ $etudiant->site }}">

        </div>

        <div class="form-group mb-3">

            <label for="filiere">filiere:</label>
            <input type="text" class="form-control" id="filiere" placeholder="filiere" name="filiere" value="{{ $etudiant->filiere }}">

        </div>
        <div class="form-group mb-3">

            <label for="niveauEtude">niveau Etude:</label>
            <input type="text" class="form-control" id="filiere" placeholder="niveauEtude" name="niveauEtude" value="{{ $etudiant->niveauEtudee }}">

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection