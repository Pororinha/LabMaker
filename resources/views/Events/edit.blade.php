@extends('layouts.main')

@section ('title', 'Editando' .$event->title)

@section ('content')

     <div id="events-create-container" class="col-md-6 offset-md-3">
       <h1>Editando {{$event->title}}</h1>
       <form action="/Events/update/{{$event -> id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
      <div class="form-group">
            <label for="image">Imagem:</label>
           <input type="file" id="image" name="image" class="form-control-file">
           <img src="img/events{{$event->image}}" alt="{{$event->title}}" class="img-preview">
      </div>
      
      <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder ="Nome do Evento" value="{{$event->title}}">
      </div>
      <div class="form-group">
            <label for="title">Local:</label>
            <input type="text" class="form-control" id="local" name="local" placeholder ="Local do Evento" value="{{$event->local}}">
      </div>
      <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder ="Cidade do Evento" value="{{$event->city}}">
      </div>
      <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description"  class="form-control" placeholder="O que vai acontecer no evento?">{{$event->description}}</textarea>
      </div>
      <div class="form-group">
            <label for="title">Itens que serão utilizados no evento:</label>
      <div class="form-group">
                  <input type="checkbox" name="items[]" value="Impressoras 3D">Impressoras 3D
      </div>
                  <div class="form-group">
                  <input type="checkbox" name="items[]" value="Filamentos">Filamentos
      </div>
                  <div class="form-group">
                  <input type="checkbox" name="items[]" value="Arduino">Arduino
      </div>
                  <div class="form-group">
                  <input type="checkbox" name="items[]" value="Notebooks">Notebooks
      </div>
      </div>
      <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{$event->date->format('Y-m-d')}}">
      </div>      
            
      <div class="form-group">
            <label for="title">Evento Maker Para o Mundo?:</label>
            <select name="private" id="private" class="form-control">
                  <option value="0">Não</option>
                  <option value="1" {{$event ->private == 1 ? "selected='selected" : ""}}>Sim</option>
            </select>
      </div>
      <input id="buttom1" type="submit" class="btn btn-primary" value="Editar Evento">
       </form>
     </div>
@endsection