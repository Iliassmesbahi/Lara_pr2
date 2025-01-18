
    @extends('master')

    @section('content')
    <div class="container mt-5">
      <div class="card shadow-sm">
        <div class="card-body">
          <form action="{{route('home.index')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input
              name="nom"
                type="text"
                class="form-control"
                id="nom"
                placeholder="Ajouter le nom"
              />
            </div>
            <div class="mb-3">
              <label for="prenom" class="form-label">Prénom</label>
              <input
              name="prenom"
                type="text"
                class="form-control"
                id="prenom"
                placeholder="Ajouter le prénom"
              />
            </div>
            <div class="mb-3">
              <label for="handle" class="form-label">Handle</label>
              <input
              name="handle"
                type="text"
                class="form-control"
                id="handle"
                placeholder="Ajouter le handle"
              />
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
        </div>
      </div>
    </div>
    @endsection
    