@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>gestion des utilisateurs</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('utilisateur/create') }}">Ajouter</a>
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
            <th>typeUtilisateur</th>

            <th>Actions</th>


        </tr>

        @foreach ($utilisateurs as $index => $utilisateur)

            <tr>
                <td>{{ $index }}</td>
                <td>{{ $utilisateur->nom }}</td>
                <td>{{ $utilisateur->prenom}}</td>
                <td>{{ $utilisateur->contact}}</td>
                <td>{{ $utilisateur->typeUtilisateur}}</td>
                
                <td>

                    <form action="{{ url('utilisateur/'. $utilisateur->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('utilisateur/'. $utilisateur->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('utilisateur/'. $utilisateur->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection