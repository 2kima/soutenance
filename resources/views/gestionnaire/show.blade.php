@extends('layouts.app')


@section('content')

    <h1></h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $gestionnaire->nom }}</td>
        </tr>

        <tr>

            <th>Company:</th>
            <td>{{ $gestionnaire->prenom }}</td>

        </tr>

        <tr>

            <th>détail:</th>
            <td>{{ $gestionnaire->contact }}</td>

        </tr>

       </table>

@endsection