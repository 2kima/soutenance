@extends('layouts.app')


@section('content')


    <h1>Modifier gestionnaire</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('gestionnaire/'. $gestionnaire->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="{{ $gestionnaire->nom }}">

        </div>

        <div class="form-group mb-3">

            <label for="prenom">prenom:</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrer prenom" name="prenom" value="{{ $gestionnaire->prenom }}">

        </div>

        <div class="form-group mb-3">

            <label for="contact">contact:</label>
            <input type="text" class="form-control" id="contact" placeholder="contact" name="contact" value="{{ $gestionnaire->contact }}">

        </div>

        

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection