@extends('layouts.layout-principal') @section('content')
<div class="row">
    <div class="col-md-6">
        <div class="h1">Interpretação de exame</div>
    </div>
    <div class="col-md-6 text-end">

    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="col-md-12 col-sm-12">
            <!-- CONTEUDO FORMULARIO -->
            <form id="form_membro">
                <!-- DADOS PESSOA -->
                <div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="">Marcador</label>
                        <select class="form-select" aria-label="Default select example" id="marcador">
                            <option selected>Selecione</option>
                          </select>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="telefone">Valor</label>
                            <input
                                type="text"
                                class="form-control"
                                id="valor"
                            />
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="btn btn-primary mt-4" onclick="handleMarcador()">Validar</div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3 col-sm-12">
                                <label for="telefone"  ></label>
                                <h2 id="textoValidacao"></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>



</div>
@endsection

@section('scripts')
    <script src="{{asset('exame.js')}}"></script>
@endsection
