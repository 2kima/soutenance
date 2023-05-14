@extends('layouts.app')


@section('content')

    <h1>Ajouter un gestionnaire</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('gestionnaire') }}" method="POST">
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
            <label for="contact">contact:</label>
            <input type="text" class="form-control" id="contact" placeholder="contact" name="contact">
        </div>

        

<button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection