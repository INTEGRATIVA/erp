@extends('layouts.layout-principal') @section('content')
<div class="row">
    <div class="col-md-6">
        <div class="h1">Marcadores</div>
    </div>
    <div class="col-md-6 text-end">
        <div
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
            id="openModal"
        >
            Novo
        </div>
    </div>
</div>
<div class="card">
    {{-- LISTA DE TERCEIROS --}}
    <div class="table-responsive text-nowrap">
        <table class="table mb-5" >
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Minimo</th>
                    <th>Maximo</th>
                    <th>Masculino</th>
                    <th>Feminino</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0" id="lista_terceiros">
                <tr></tr>
            </tbody>
        </table>
    </div>

    {{-- MODAL - FORMULARIO CADASTRO MARCADORES --}}
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Cadastro de Marcadores
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                        id="close_modal"
                    ></button>
                </div>
                <div class="modal-body">
                    <!-- CONTEUDO FORMULARIO -->
                    <form id="form_marcador">
                        <!-- DADOS MARCADOR -->
                        <input type="hidden" name="id" id="id" />
                        <div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="name">Nome</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nome"
                                    />
                                </div>
                                <div class='col-md-3 col-sm-6'>
                                    <label for="name">Minimo</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="minimo"
                                    />
                                </div>
                                <div class='col-md-3 col-sm-6'>
                                    <label for="name">Maximo</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="maximo"
                                    />
                                </div>
                                <div class='col-md-3 col-sm-6'>
                                    <label for="name">Masculino</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="masculino"
                                    />
                                    <div class='col-md-3 col-sm-6'>
                                    <label for="name">Feminino</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="feminino"
                                    />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-primary" id="salvar">
                        Salvar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{asset('admin/cadastro/marcador.js')}}"></script>
@endsection
