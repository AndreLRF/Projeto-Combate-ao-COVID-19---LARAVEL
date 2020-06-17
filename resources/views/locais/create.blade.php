@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Adicionar Ponto de Atendimento</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('locais.store') }}">
          @csrf
          <div class="form-group">    
              <label for="logradouro">Logradouro:</label>
              <input type="text" class="form-control" name="logradouro"/>
          </div>

          <div class="form-group">
              <label for="numero">Numero:</label>
              <input type="text" class="form-control" name="numero"/>
          </div>

          <div class="form-group">
              <label for="bairro">Bairro:</label>
              <input type="text" class="form-control" name="bairro"/>
          </div>
          <div class="form-group">
              <label for="regiao">Região:</label>
              <input type="text" class="form-control" name="regiao"/>
          </div>                      
          <button type="submit" class="btn btn-primary-outline">Adicionar</button>
      </form>
  </div>
</div>
</div>
@endsection