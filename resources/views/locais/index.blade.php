@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Locais de Atendimento</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Logradouro</td>
          <td>Numero</td>
          <td>Bairro</td>
          <td>Regiao</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($locais as $locais)
        <tr>
            <td>{{$locais->id}}</td>
            <td>{{$locais->logradouro}}</td>
            <td>{{$locais->numero}}</td>
            <td>{{$locais->bairro}}</td>
            <td>{{$locais->regiao}}</td>
            <td>
                <a href="{{ route('locais.edit',$locais->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('locais.destroy', $locais->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div>
    <a style="margin: 19px;" href="{{ route('locais.create')}}" class="btn btn-primary">Novo Local</a>
    </div>
</div>



@endsection