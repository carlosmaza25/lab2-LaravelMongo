@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">{{ __('Productos') }}</div>
                    <div class="container-fluid">
                        <div class="col-md-auto" ><a class="btn btn-primary" href="{{route('create')}}">Agregar Nuevo Producto</a>
                        </div>
                    </div>
                <div class="card-body">
			<div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre del Producto</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Existencia</th>
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>AAA-0001</td>
                            <td>SAMSUNG Galaxy S20</td>
                            <td>SmartPhone de gama alta.</td>
                            <td>Celular</td>
                            <td>412.95</td>
                            <td>25</td>
                            <td>
                                <a class="btn btn-success" href="">Editar</a>
                                <a class="btn btn-danger" href="">Eliminar</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
	                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
