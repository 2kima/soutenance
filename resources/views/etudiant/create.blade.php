@extends('layouts.app')


@section('content')

    <h1>Ajouter un etudiant</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('etudiant') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
        </div>

        <div class="form-group mb-3">

            <label for="prenom">prenom:</label>
            <input type="text" class="form-control" id="prenom" placeholder="prenom" name="prenom">

        </div>

        <div class="form-group mb-3">
            <label for="email">emai:</label>
            <input type="email" class="form-control" id="email" placeholder="email" name="email">
        </div>

        <div class="form-group mb-3">
            <label for="site">site:</label>
            <input type="site" class="form-control" id="site" placeholder="site" name="site">
        </div>

        <div class="form-group mb-3">
            <label for="filiere">filiere:</label>
            <input type="text" class="form-control" id="filiere" placeholder="filiere" name="filiere">
        </div>

        <div class="form-group mb-3">
            <label for="niveauEtude">niveauEtude:</label>
            <input type="niveauEtude" class="form-control" id="niveauEtude" placeholder="niveauEtude" name="niveauEtude">
        </div>

<button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection