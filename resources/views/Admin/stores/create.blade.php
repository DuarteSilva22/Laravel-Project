@extends('layouts.app')

@section('content')

    <h1>Criar Loja</h1>
    <br>
    <form action="{{route('admin.stores.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label>Nome Loja</label>
            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{old('name')}}">
            @error('name')
           <div class="invalid-feedback">
               {{$message}}
           </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror" value="{{old('description')}}">
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Numero Telemovel</label>
            <input type="text" name="mobile_phone" class="form-control  @error('mobile_phone') is-invalid @enderror" value="{{old('mobile_phone')}}">
            @error('mobile_phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror" value="{{old('slug')}}">
            @error('slug')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <br>
            <button type="Submit" class="btn btn-lg btn-success">Criar Loja</button>
        </div>
    </form>

@endsection
