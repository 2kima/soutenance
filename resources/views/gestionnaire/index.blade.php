@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>gestion des gestionnaires</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('gestionnaire/create') }}">Ajouter</a>
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
            <th>contact</th>
            
            <th>Actions</th>


        </tr>

        @foreach ($gestionnaires as $index => $gestionnaire)

            <tr>
                <td>{{ $index }}</td>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom}}</td>
                <td>{{ $etudiant->contact}}</td>
                
                <td>

                    <form action="{{ url('gestionnaire/'. $gestionnaire->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('gestionnaire/'. $gestionnaire->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('gestionnaire/'. $gestionnaire->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection