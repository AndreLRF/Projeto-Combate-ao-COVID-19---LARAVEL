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
          <td colspan=2>Actions</td>
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
      <div>
        <img src="{{ asset('image/legenda.png') }}" class="img-fluid" >
      </div>

      <div class="view overlay" style="height: 800px; width: auto;">
        <img src="{{ asset('image/mapaop.png') }}" class="img-fluid" style="position: absolute;">

        <!-- 1 - CENTRAL -->
        <div class="view overlay" style="position: relative; left: 300px; top: 350px;">
          <img src="{{ asset('image/pin.png') }}" class="img-fluid " style="width:5%">
          <div class="mask flex-center rgba-black-strong" style="width:18%">
            <p class="white-text" style="font-size: 13px;">
              @foreach($locais->where('regiao', 'Central') as $local)
              {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}} <br>
              @endforeach
            </p>
          </div>
        </div>

        <!-- 2 - NORTE -->
        <div class="view overlay" style="position: relative; left: 350px; top: 170px;">
          <img src="{{ asset('image/pin.png') }}" class="img-fluid " style="width:5%">
          <div class="mask flex-center rgba-black-strong" style="width:18%">
            <p class="white-text" style="font-size: 13px;">
              @foreach($locais->where('regiao', 'Norte') as $local)
              {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}} <br>
              @endforeach
            </p>
          </div>
        </div>

        <!-- 3 - OESTE -->
        <div class="view overlay" style="position: relative; left: 150px; top: 200px;">
          <img src="{{ asset('image/pin.png') }}" class="img-fluid " style="width:5%">
          <div class="mask flex-center rgba-black-strong" style="width:18%">
            <p class="white-text" style="font-size: 13px;">
              @foreach($locais->where('regiao', 'Oeste') as $local)
              {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}} <br>
              @endforeach
            </p>
          </div>
        </div>

        <!-- 4 - SUL -->
        <div class="view overlay" style="position:  relative; left: 310px; top: 430px;">
          <img src="{{ asset('image/pin.png') }}" class="img-fluid " style="width:5%">
          <div class="mask flex-center rgba-black-strong" style="width:18%">
            <p class="white-text" style="font-size: 13px;">
              @foreach($locais->where('regiao', 'Sul') as $local)
              {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}} <br>
              @endforeach
            </p>
          </div>
        </div>

        <!-- 5 - NORDESTE -->
        <div class="view overlay" style="position:  relative; left: 470px; top: 180px;">
          <img src="{{ asset('image/pin.png') }}" class="img-fluid " style="width:5%">
          <div class="mask flex-center rgba-black-strong" style="width:18%">
            <p class="white-text" style="font-size: 13px;">
              @foreach($locais->where('regiao', 'Nordeste') as $local)
              {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}} <br>
              @endforeach
            </p>
          </div>
        </div>

        <!-- 6 - SUDESTE -->
        <div class="view overlay" style="position:  relative; left: 550px; top: 240px;">
          <img src="{{ asset('image/pin.png') }}" class="img-fluid " style="width:5%">
          <div class="mask flex-center rgba-black-strong" style="width:18%">
            <p class="white-text" style="font-size: 13px;">
              @foreach($locais->where('regiao', 'Sudeste') as $local)
              {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}} <br>
              @endforeach
            </p>
          </div>
        </div>

        <!-- 7 - SUDOESTE -->
        <div class="view overlay" style="position:  relative; left: 345px; top: 145px;">
          <img src="{{ asset('image/pin.png') }}" class="img-fluid " style="width:5%">
          <div class="mask flex-center rgba-black-strong" style="width:18%">
            <p class="white-text" style="font-size: 13px;">
              @foreach($locais->where('regiao', 'Sudoeste') as $local)
              {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}} <br>
              @endforeach
            </p>
          </div>
        </div>

        <!-- 8 - LESTE I -->
        <div class="view overlay" style="position:  relative; left: 690px; top: -15px;">
          <img src="{{ asset('image/pin.png') }}" class="img-fluid " style="width:5%">
          <div class="mask flex-center rgba-black-strong" style="width:18%">
            <p class="white-text" style="font-size: 13px;">
              @foreach($locais->where('regiao', 'Leste I') as $local)
              {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}} <br>
              @endforeach
            </p>
          </div>
        </div>

        <!-- 8 - LESTE II -->
        <div class="view overlay" style="position:  relative; left: 800px; top: -140px;">
          <img src="{{ asset('image/pin.png') }}" class="img-fluid " style="width:5%">
          <div class="mask flex-center rgba-black-strong" style="width:18%">
            <p class="white-text" style="font-size: 13px;">
              @foreach($locais->where('regiao', 'Leste II') as $local)
              {{$local->logradouro}} - {{$local->numero}} - {{$local->bairro}} <br>
              @endforeach
            </p>
          </div>
        </div>

      </div>
      <div>
        <a style="margin: 19px;" href="{{ route('locais.create')}}" class="btn btn-primary">Novo Local</a>
      </div>
    </div>



    @endsection