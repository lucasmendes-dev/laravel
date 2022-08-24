@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <input class="form-control-file" type="file" name="image" id="image">
    </div> 

    <div class="form-group">
      <label for="title">Evento:</label>
      <input class="form-control" type="text" name="title" id="title" placeholder="Nome do Evento">
    </div>

    <div class="form-group">
      <label for="date">Data do Evento:</label>
      <input class="form-control" type="date" name="date" id="date">
    </div>

    <div class="form-group">
      <label for="city">Cidade:</label>
      <input class="form-control" type="text" name="city" id="city" placeholder="Local do Evento">
    </div>

    <div class="form-group">
      <label for="private">O Evento é privado?</label>
      <select class="form-control" name="private" id="private">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </div>

    <div class="form-group">
      <label for="description">Descrição:</label>
      <textarea class = "form-control" name="description" id="description" placeholder="O que vai acontecer no evento?"></textarea>
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
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection