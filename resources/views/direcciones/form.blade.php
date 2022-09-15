@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Agregar direccion</div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($ruta == 'store')
                                {!! BootForm::open()->action(route('direccion.store', $direccion)) !!}
                            @else
                                {!! BootForm::open()->action(route('direccion.update', $direccion))->put() !!}
                            @endif

                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Direccion</h5>
                                </div>
                                <div class="col-md-6">
                                    {!! BootForm::text('Estado *', 'estado', old('estado', $direccion->estado))->required() !!}
                                </div>
                                <div class="col-md-6">
                                    {!! BootForm::text('Municipio *', 'municipio', old('municipio', $direccion->municipio))->required() !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    {!! BootForm::text('Calle y numero *', 'direccion', old('direccion', $direccion->direccion))->required() !!}
                                </div>
                                <div class="col-md-3">
                                    {!! BootForm::text('Codigo postal *', 'codigo_postal', old('codigo_postal', $direccion->codigo_postal))->required()->type('number')->min(0)->max(99999) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Coordenadas geograficas</h5>
                                </div>
                                <div class="col-md-6">
                                    {!! BootForm::text('Longitud *', 'longitud', old('longitud', $direccion->longitud))->required()->type('number')->step('any') !!}
                                </div>
                                <div class="col-md-6">
                                    {!! BootForm::text('Latitud *', 'latitud', old('latitud', $direccion->latitud))->required()->type('number')->step('any') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Precios de gasolina</h5>
                                </div>
                                <div class="col-md-4">
                                    {!! BootForm::text('Regular *', 'regular', old('regular', $direccion->regular))->required()->type('number')->step('any') !!}
                                </div>
                                <div class="col-md-4">
                                    {!! BootForm::text('Premium *', 'premium', old('premium', $direccion->premium))->required()->type('number')->step('any') !!}
                                </div>
                                <div class="col-md-4">
                                    {!! BootForm::text('Diesel', 'diesel', old('diesel', $direccion->diesel))->step('any') !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    {!! BootForm::submit('Guardar') !!}
                                    <a href="{{ route('direccion.index') }}"
                                        class="text-danger text-right col-md-2 pull-right">Cancelar</a>
                                </div>
                            </div>
                            {!! BootForm::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
