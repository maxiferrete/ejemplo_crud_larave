@extends('layouts.applistado')
@section('tituloPagina', 'Listado de Productos')
@section('tituloGestion', 'Productos')
@section('botonAgregar', "Crear Producto")
@section('rutaCrear')
    {{ route('productos.create') }}
@endsection
@section('listado')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <!--iterar los productos del listado-->
        @forelse ($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>
                    <a href="{{route('productos.edit',['producto'=>$producto->id] )}}" class="edit" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
                    <a href="{{route('productos.show',['producto'=>$producto->id])}}" class="delete" ><i class="material-icons" title="Delete">&#xE872;</i></a>
                </td>
            </tr>    
        @empty
			<div class="alert alert-info alert-dismissible fade show" role="alert">
                Aún no hay productos cargados
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforelse
    </tbody>
</table>
@endsection