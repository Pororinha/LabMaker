@extends('layouts.main')

@section ('title', 'Criar Eventos ')

@section ('content')

     <div id="events-create-container" class="col-md-6 offset-md-3">
       <h1>Criar Evento Maker</h1>
       <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
      <div class="form-group">
            <label for="image">Imagem:</label>
           <input type="file" id="image" name="image" class="form-control-file">
      </div>
      
      <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder ="Nome do Evento">
      </div>
      <div class="form-group">
            <label for="title">Local:</label>
            <input type="text" class="form-control" id="local" name="local" placeholder ="Local do Evento">
      </div>
      <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder ="Cidade do Evento">
      </div>
      <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description"  class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
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
            <input type="date" class="form-control" id="date" name="date">
      </div>      
            
      <div class="form-group">
            <label for="title">Evento Maker Para o Mundo?:</label>
            <select name="private" id="private" class="form-control">
                  <option value="0">Não</option>
                  <option value="1">Sim</option>
            </select>
      </div>
      <input id="buttom1" type="submit" class="btn btn-primary" value="Criar Evento">
       </form>
     </div>
@endsection