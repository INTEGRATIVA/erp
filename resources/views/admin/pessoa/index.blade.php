@extends('layouts.layout-principal') @section('content')
<div class="btn" id="teste"> teste</div>
<div class="row">
    <div class="col-md-6">
        <div class="h1">Terceiros</div>
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
        <table class="table">
            <thead>
                <tr>
                    <th>Project</th>
                    <th>Client</th>
                    <th>Users</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>
                        <i class="bx bxl-angular bx-sm text-danger me-3"></i>
                        <span class="fw-medium">Angular Project</span>
                    </td>
                    <td>Albert Cook</td>
                    <td>
                        <ul
                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"
                        >
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Lilian Fuller"
                                data-bs-original-title="Lilian Fuller"
                            >
                                <img
                                    src="../assets/img/avatars/5.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Sophia Wilkerson"
                                data-bs-original-title="Sophia Wilkerson"
                            >
                                <img
                                    src="../assets/img/avatars/6.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Christina Parker"
                                data-bs-original-title="Christina Parker"
                            >
                                <img
                                    src="../assets/img/avatars/7.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                        </ul>
                    </td>
                    <td>
                        <span class="badge bg-label-primary me-1">Active</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="bx bxl-react bx-sm text-info me-3"></i>
                        <span class="fw-medium">React Project</span>
                    </td>
                    <td>Barry Hunter</td>
                    <td>
                        <ul
                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"
                        >
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Lilian Fuller"
                                data-bs-original-title="Lilian Fuller"
                            >
                                <img
                                    src="../assets/img/avatars/5.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Sophia Wilkerson"
                                data-bs-original-title="Sophia Wilkerson"
                            >
                                <img
                                    src="../assets/img/avatars/6.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Christina Parker"
                                data-bs-original-title="Christina Parker"
                            >
                                <img
                                    src="../assets/img/avatars/7.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                        </ul>
                    </td>
                    <td>
                        <span class="badge bg-label-success me-1"
                            >Completed</span
                        >
                    </td>
                    <td>
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                >
                                <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    ><i class="bx bx-trash me-2"></i> Delete</a
                                >
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="bx bxl-vuejs bx-sm text-success me-3"></i>
                        <span class="fw-medium">VueJs Project</span>
                    </td>
                    <td>Trevor Baker</td>
                    <td>
                        <ul
                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"
                        >
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Lilian Fuller"
                                data-bs-original-title="Lilian Fuller"
                            >
                                <img
                                    src="../assets/img/avatars/5.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Sophia Wilkerson"
                                data-bs-original-title="Sophia Wilkerson"
                            >
                                <img
                                    src="../assets/img/avatars/6.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Christina Parker"
                                data-bs-original-title="Christina Parker"
                            >
                                <img
                                    src="../assets/img/avatars/7.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                        </ul>
                    </td>
                    <td>
                        <span class="badge bg-label-info me-1">Scheduled</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                >
                                <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    ><i class="bx bx-trash me-2"></i> Delete</a
                                >
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="bx bxl-bootstrap bx-sm text-primary me-3"></i>
                        <span class="fw-medium">Bootstrap Project</span>
                    </td>
                    <td>Jerry Milton</td>
                    <td>
                        <ul
                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"
                        >
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Lilian Fuller"
                                data-bs-original-title="Lilian Fuller"
                            >
                                <img
                                    src="../assets/img/avatars/5.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Sophia Wilkerson"
                                data-bs-original-title="Sophia Wilkerson"
                            >
                                <img
                                    src="../assets/img/avatars/6.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                            <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                aria-label="Christina Parker"
                                data-bs-original-title="Christina Parker"
                            >
                                <img
                                    src="../assets/img/avatars/7.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                />
                            </li>
                        </ul>
                    </td>
                    <td>
                        <span class="badge bg-label-warning me-1">Pending</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                >
                                <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    ><i class="bx bx-trash me-2"></i> Delete</a
                                >
                            </div>
                        </div>
                    </td>
                </tr>
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
                        Cadastro de Terceiro
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <!-- CONTEUDO FORMULARIO -->
                    <form>
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
                        <div>
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
                        <div>
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
                                    <input type="text" class="form-control" id="insc_municipal">
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
                    <button type="button" class="btn btn-primary">
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
