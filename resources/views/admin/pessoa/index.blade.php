@extends('layouts.layout-principal') @section('content')
<div class="row">
    <div class="col-md-6">
        <div class="h1">Membros</div>
    </div>
    <div class="col-md-6 text-end">
        <div
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
        >
            Novo
        </div>
    </div>
</div>
<div class="card">
    {{-- LISTA DE TERCEIROS --}}
    <div class="table-responsive text-nowrap">
        <table class="table" >
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0" id="lista_terceiros">
                <tr></tr>
            </tbody>
        </table>
    </div>

    {{-- MODAL - FORMULARIO CADASTRO TERCEIRO --}}
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
                        Cadastro de Membros
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
                    <form id="form_membro">
                        <!-- DADOS PESSOA -->
                        <input type="hidden" name="id" />
                        <div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label for="name">Nome</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nome"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="telefone">Telefone</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="telefone"
                                    />
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <lable for="email">Email</lable>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="email"
                                    />
                                </div>
                            </div>
                        </div>
                        <!-- SELECT TIPO PESSOA -->
                        <div class="row">
                            <div class="col-md-6 col-md-6">
                                <label for="">Tipo de pessoa</label>
                                <select class="form-select" aria-label="Default select example" id="tipo_pessoa">
                                    <option selected>Selecione</option>
                                    <option value="pf">Pessoa Física</option>
                                    <option value="pj">Pessoa Juridica</option>
                                  </select>
                            </div>
                        </div>

                        <!-- DADOS PESSOA FISICA -->
                        <div id="dados_pessoa_fisica" class="oculto">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="data_nascimento"
                                        >Nascimento</label
                                    >
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="data_nascimento"
                                    />
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="cpf">CPF</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="cpf"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="rg">RG</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="rg"
                                    />
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="rg_orgao_emissor"
                                        >Orgão emissor RG</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="rg_orgao_emissor"
                                    />
                                </div>
                            </div>
                        </div>

                        <!--DADOS PESSOA JURIDICA -->
                        <div id="dados_pessoa_juridica" class="oculto">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="data_abertura">Data de abertura</label>
                                    <input type="date" class="form-control" id="data_abertura">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="text" class="form-control" id="cnpj">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label for="insc_municipal">Insc. Municipal</label>
                                    <input type="text" class="form-control" id="insc_municipal">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="insc_estadual">Insc. Estadual</label>
                                    <input type="text" class="form-control" id="insc_estadual">
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
    <script src="{{asset('admin/terceiro.js')}}"></script>
@endsection
