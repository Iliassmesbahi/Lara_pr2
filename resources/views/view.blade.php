@extends('master')

@section('content')
    <div style="display: flex ; margin:5px">
            <div class="card" style="width: 18rem; margin:5px">
                <div class="card-body">
          <h4 class="card-title">Id :{{ $ilias['id'] }}</h4>
          <p class="card-text"><h4>Prenom :{{ $ilias['prenom'] }}</h4></p>
          <p class="card-text"><h4>Nom :{{ $ilias['nom'] }}</h4></p>
          <p class="card-text"><h4>Handle :{{ $ilias['handle'] }}</h4></p>
          <center><a href="/" class="btn btn-primary">Retour a Home</a></center>
        </div>
      </div>
        </div>
     

        @endsection