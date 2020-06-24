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
        @foreach($locais as $local)
        <tr>
            <td>{{$local->id}}</td>
            <td>{{$local->logradouro}}</td>
            <td>{{$local->numero}}</td>
            <td>{{$local->bairro}}</td>
            <td>{{$local->regiao}}</td>
            <td>
                <a href="{{ route('locais.edit',$local->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('locais.destroy', $local->id)}}" method="post">
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





<div class="view overlay"style="position: relative; left: 200px; top: 50px;" >  
    <img src="{{ asset('image/tnc.png') }}" class="img-fluid ">
    <div class="mask flex-center rgba-grey-light" style="width:18%">
        <p class="white-text" style="font-size: 13px;">
        @foreach($locais->where('regiao', 'Sudeste') as $local)
        {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}}  <br>
        @endforeach
        </p>
    </div>
</div>


<div>
    <a style="margin: 19px;" href="{{ route('locais.create')}}" class="btn btn-primary">Novo Local</a>
    </div>
</div>



@endsection