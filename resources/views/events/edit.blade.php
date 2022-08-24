@extends('layouts.main')

@section('title', 'Editando:' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $event->title }}</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <input class="form-control-file" type="file" name="image" id="image">
      <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
    </div> 

    <div class="form-group">
      <label for="title">Evento:</label>
      <input class="form-control" type="text" name="title" id="title" placeholder="Nome do Evento" value="{{ $event->title }}">
    </div>

    <div class="form-group">
      <label for="date">Data do Evento:</label>
      <input class="form-control" type="date" name="date" id="date" value="{{ $event->date->format('Y-m-d') }}">
    </div>

    <div class="form-group">
      <label for="city">Cidade:</label>
      <input class="form-control" type="text" name="city" id="city" placeholder="Local do Evento" value="{{ $event->city }}">
    </div>

    <div class="form-group">
      <label for="private">O Evento é privado?</label>
            <select class="form-control" name="private" id="private" value="Privado">
                <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
                <option value="0">Não</option>
            </select>
    </div>

    <div class="form-group">
      <label for="description">Descrição:</label>
      <textarea class = "form-control" name="description" id="description">{{ $event->description }}</textarea>
    </div>
    
    <div class="form-group">
      <label for="items">Adicione itens de infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]"  value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]"  value="Palco"> Palco
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]"  value="Cerveja grátis"> Cerveja grátis
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]"  value="Open food"> Open food
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]"  value="Brindes"> Brindes
      </div>
      
    </div>
    <input type="submit" class="btn btn-primary" value="Alterar Evento">
  </form>
</div>

@endsection