@extends('layouts.app')

@section('content')

    <h1>Criar Loja</h1>
    <br>
    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label>Nome Loja</label>
            <input type="text" name="name" class="form-control" value="{{$store->name}}">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control" value="{{$store->description}}">
        </div>

        <div class="form-group">
            <label>Numero Telemovel</label>
            <input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_phone}}">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{$store->slug}}">
        </div>

        <div class="form-group">
            <br>
            <button type="Submit" class="btn btn-lg btn-success">Atualizar Loja</button>
        </div>
    </form>

@endsection
