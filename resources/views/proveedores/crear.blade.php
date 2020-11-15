@extends('layouts.app')
@section('container')
<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card mt-3">
			<div class="card-header  text-white bg-primary mb-3">@isset($proveedor) Editar @else Nuevo @endisset Proveedor</div>
			<div class="card-body">
				<form method="POST" action= @isset($proveedor)
											{{route("proveedores.update",["proveedore" =>$proveedor->id])}}
											@else 
											{{route("proveedores.store")}}
											@endisset
				>
					@csrf
					@isset($proveedor)
						@method("PUT")
					@endisset
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" 
						placeholder="Nombre del proveedor" required="required" maxlenght="100" value="{{old('nombre')}}">

						@if ($errors->has('nombre'))
							<span class="text-danger">{{$errors->first('nombre')}}</span>
						@endif
					</div>
					<div class="form-group">
						<label for="razonSocial">Razon Social</label>
						<input type="text" name="razonSocial" class="form-control" id="razonSocial" value="{{old('razonSocial')}}" placeholder="Razon Social del proveedor" required="required">
					</div>
					
					<button type="submit" class="btn btn-primary">Guardar</button>
		
					<a href="{{route('proveedores.index')}}" class="btn btn-danger">Cancelar</a>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection