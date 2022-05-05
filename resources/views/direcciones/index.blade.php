@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Registros</div>
                                <div class="card-tools">
                                    <a href="{{ route('direccion.create') }}"
                                        class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        Nuevo registro
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-hover table-sales">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">Municipio</th>
                                            <th class="text-center">Direccion</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($direcciones as $direccion)
                                            <tr>
                                                <td>{{ $direccion->estado }}</td>
                                                <td>{{ $direccion->municipio }}</td>
                                                <td>{{ $direccion->direccion }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('direccion.edit', $direccion) }}">
                                                        <button type="button" class="btn btn-icon btn-round btn-success">
                                                            <i class="fas fa-pen"></i>
                                                        </button>
                                                    </a>

                                                    {!! BootForm::open()->action(route('direccion.destroy', $direccion))->delete() !!}
                                                    <button type="submit" class="btn btn-icon btn-round btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    {!! BootForm::close() !!}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="4">No existen registros actualmente</td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Resultado servicio</div>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fas fa-cogs"></i>
                                        </span>
                                        Generar peticion
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group" style="display: none">
                                <textarea class="form-control" id="resultado" rows="15"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        /* TODO: Peticion hacia el servicio, actualizar el valor del area de texto resultado */
    </script>
@endsection