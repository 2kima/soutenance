@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>gestion des etudiants</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('etudiant/create') }}">Ajouter</a>
        </div>

    </div>

 

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

 

    <table class="table table-bordered">

        <tr>

            <th>Nomero</th>
            <th>Nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>site</th>
            <th>filiere</th>
            <th>niveauEtude</th>
            <th>Actions</th>


        </tr>

        @foreach ($etudiants as $index => $etudiant)

            <tr>
                <td>{{ $index }}</td>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom}}</td>
                <td>{{ $etudiant->email}}</td>
                <td>{{ $etudiant->site }}</td>
                <td>{{ $etudiant->filiere }}</td>
                <td>{{ $etudiant->niveauEtude }}</td>
                <td>

                    <form action="{{ url('etudiant/'. $etudiant->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('etudiant/'. $etudiant->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('etudiant/'. $etudiant->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection