@extends('layouts.app')

@section('content')
    @if(!$store)
    <a href="{{route('admin.stores.create')}}" class="btn btn-kg btn-success">Criar Loja</a>
    @endif
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Store</th>
        <th>Total de produtos</th>
        <th>Actions</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$store->id}}</td>
        <td>{{$store->name}}</td>
        <td>{{$store->products->count()}}</td>
        <td>
            <div class="btn-group">
                <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-primary">EDITAR</a>
                <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                </form>
            </div>
        </td>
    </tr>
    </tbody>
</table>

@endsection
