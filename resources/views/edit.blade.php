
@extends('master')

@section('content')


<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-body">
      <form action="{{ route('update.post', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <div class="mb-3">
            <input type="hidden" name="id" value="{{ $post->id }}">
            <label for="prenom" class="form-label">Prénom</label>
            <input
            name="prenom"
            value="{{$post->prenom}}"
              type="text"
              class="form-control"
              
            />
          <label for="nom" class="form-label">Nom</label>
          <input
          name="nom"
          value="{{$post->nom}}"
            type="text"
            class="form-control"
            
          />
        </div>
        
        </div>
        <div class="mb-3">
          <label for="handle" class="form-label">Handle</label>
          <input 
          name="handle"
          value="{{$post->handle}}"
            type="text"
            class="form-control"
            
          />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>
@endsection
