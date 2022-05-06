@extends('layouts.app')

@section('content')
    <div class="content">

        <div class="col-md-12 my-3">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Busqueda de precios</div>
                        <div class="card-tools">
                            <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-today" data-toggle="pill"
                                        onclick="generarPeticion();" role="tab" aria-selected="true">Buscar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! BootForm::open() !!}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="estado">Por estado</label>
                                <input type="text" name="estado" onchange="validarCamposBusqueda(this)" id="estado"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="municipio">Por municipio</label>
                                <input type="text" name="municipio" onchange="validarCamposBusqueda(this)" id="municipio"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! BootForm::select('Ordenamiento', 'tipoGasolinaOrden', $tipoBusqueda) !!}
                        </div>
                    </div>

                    {!! BootForm::close() !!}

                </div>
            </div>
        </div>

        <div class="page-inner">
            <div class="row row-card-no-pd">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <h4 class="card-title">Resultados</h4>
                            </div>
                            <p class="card-category">Precio de la gasolina</p>
                        </div>
                        <div class="card-body">

                            <div class="col-md-12">
                                <div class="mapcontainer">
                                    <div id="map-example" class="vmap"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="table-responsive table-hover table-sales">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Estado</th>
                                                <th>Municipio</th>
                                                <th>Direccion</th>
                                                <th>Codigo postal</th>
                                                <th>Gasolina regular</th>
                                                <th>Gasolina premium</th>
                                                <th>Diesel</th>
                                            </tr>
                                        </thead>
                                        <tbody id="contenidoTabla">

                                        </tbody>
                                    </table>
                                </div>
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
        function validarCamposBusqueda(inputText) {
            if (inputText.id == 'estado') {
                document.getElementById('municipio').value = '';
            } else {
                document.getElementById('estado').value = '';
            }
        }

        function generarPeticion() {
            let ordenSeleccionado = document.getElementById('tipoGasolinaOrden').value;
            if (ordenSeleccionado != '') {

                let url = window.location.href;
                url = url.replace('busqueda', 'api/direccionesOrdenadas');

                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    data: {
                        tipoGasolinaOrden: ordenSeleccionado,
                        estado: document.getElementById('estado').value,
                        municipio: document.getElementById('municipio').value
                    },
                    success: (respuesta) => {
                        construirTabla(respuesta);
                    },
                    error: () => {
                        console.log('Error, puede ser la url.')
                    },
                });

            } else {
                alert('Seleccione un metodo de ordenamiento')
            }
        }

        function construirTabla(elementos) {
            let tabla = document.getElementById('contenidoTabla');
            let elementohtml = '';
            if (elementos.length > 0) {
                elementos.forEach(elemento => {
                    elementohtml += `<tr>
                                        <td>${elemento.estado}</td>
                                        <td>${elemento.municipio}</td>
                                        <td>${elemento.direccion}</td>
                                        <td>${elemento.codigo_postal}</td>
                                        <td>${elemento.regular}</td>
                                        <td>${elemento.premium}</td>
                                        <td>${elemento.diesel}</td>
                                    </tr>`;
                });
            } else {
                elementohtml = `<tr>
                                    <td class="text-center" colspan="7">No existen registros de esta busqueda</td>
                                </tr>`
            }


            tabla.innerHTML = elementohtml;
        }
    </script>
@endsection
