@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Atualizar Local de Atendimento</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('locais.update', $locais->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="logradouro">Logradouro:</label>
                <input type="text" class="form-control" name="logradouro" value={{ $locais->logradouro }} />
            </div>

            <div class="form-group">
                <label for="numero">Numero:</label>
                <input type="text" class="form-control" name="numero" value={{ $locais->numero }} />
            </div>

            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" name="bairro" value={{ $locais->bairro }} />
            </div>
            <div class="form-group">
                <label for="regiao">Região:</label>
                <input type="text" class="form-control" name="regiao" value={{ $locais->regiao }} />
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</div>
@endsection