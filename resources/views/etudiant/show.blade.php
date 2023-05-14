@extends('layouts.app')


@section('content')

    <h1></h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $etudiant->nom }}</td>
        </tr>

        <tr>

            <th>Company:</th>
            <td>{{ $etudiant->prenom }}</td>

        </tr>

        <tr>

            <th>détail:</th>
            <td>{{ $etudiant->email }}</td>

        </tr>

        <tr>

            <th>Fortune:</th>
            <td> {{ $etudiant->site }}</td>

        </tr>

        <tr>

            <th>filiere:</th>
            <td> {{ $etudiant->filiere }}</td>

        </tr>

        <tr>

            <th>niveauEtude:</th>
            <td> {{ $etudiant->niveauEtude }}</td>

        </tr>



    </table>

@endsection