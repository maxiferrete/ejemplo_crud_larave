@extends('layouts.applistado')
@section('tituloPagina', 'Listado de Proveedores')
@section('tituloGestion', 'Proveedores')
@section('botonAgregar', "Crear Proveedor")
@section('rutaCrear')
    {{route('proveedors.create')}}
@endsection
@section('listado')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Razon Social</th>
            <th>Saldo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($proveedores as $proveedor)
            <tr>
                
                <td>{{$proveedor->nombre}}</td>
                <td>{{$proveedor->razon_social}}</td>
                <td>{{$proveedor->saldo}}</td>
                <td>
                    <a href="{{route('proveedors.edit',['proveedor'=>$proveedor->id] )}}" class="edit" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
                    <a href="{{route('proveedors.show',['proveedor'=>$proveedor->id])}}" class="delete" ><i class="material-icons" title="Delete">&#xE872;</i></a>
                </td>
            </tr>    
        @empty
        <div class="alert alert-info alert-dismissible fade show" role="alert">
			Aún no hay proveedores cargados
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	    @endforelse
    </tbody>
</table>
@endsection