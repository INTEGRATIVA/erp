let main = (() => {
    function start() {
        registerElements();
        getAll();
        registerEvents();
    }

    let form = {
        nome: "",
        telefone: "",
        email: "",
        data_nascimento: "",
        cpf: "",
        rg: "",
        rg_orgao_emissor: "",
        data_abertura: "",
        cnpj: "",
        insc_municipal: "",
        insc_estadual: "",
        tipo_pessoa: "",
    };

    function registerElements() {
        // PESSOA
        form.nome = document.getElementById("nome");
        form.telefone = document.getElementById("telefone");
        form.email = document.getElementById("email");
        // PESSOA FISICA
        form.data_nascimento = document.getElementById("data_nascimento");
        form.cpf = document.getElementById("cpf");
        form.rg = document.getElementById("rg");
        form.rg_orgao_emissor = document.getElementById("rg_orgao_emissor");
        // PESSOA JURIDICA
        form.data_abertura = document.getElementById("data_abertura");
        form.cnpj = document.getElementById("cnpj");
        form.insc_municipal = document.getElementById("insc_municipal");
        form.insc_estadual = document.getElementById("insc_estadual");

        form.tipo_pessoa = document.getElementById("tipo_pessoa");
    }

    function registerEvents() {
        setTimeout(() => {
            registrarListener("tipo_pessoa", "change", handleTipoPessoa);
            registrarListener("salvar", "click", store);
            registrarListener("excluir", "click", exclude);
        }, 200);
    }

    const handleTipoPessoa = () => {
        if (form.tipo_pessoa.value !== "") {
            if (form.tipo_pessoa.value == "pf") {
                document
                    .getElementById("dados_pessoa_fisica")
                    .classList.remove("oculto");
                document
                    .getElementById("dados_pessoa_juridica")
                    .classList.add("oculto");
            } else {
                document
                    .getElementById("dados_pessoa_juridica")
                    .classList.remove("oculto");
                document
                    .getElementById("dados_pessoa_fisica")
                    .classList.add("oculto");
            }
        }
    };

    const registrarListener = (elementId, eventType, callBack) => {
        document
            .getElementById(`${elementId}`)
            .addEventListener(`${eventType}`, callBack);
    };

    const store = () => {
        const pessoa = {
            nome: form.nome.value,
            telefone: form.telefone.value,
            email: form.email.value,
            data_nascimento: form.data_nascimento.value,
            cpf: form.cpf.value,
            rg: form.rg.value,
            rg_orgao_emissor: form.rg_orgao_emissor.value,
            data_abertura: form.data_abertura.value,
            cnpj: form.cnpj.value,
            insc_municipal: form.insc_municipal.value,
            insc_estadual: form.insc_estadual.value,
            tipo_pessoa: form.tipo_pessoa.value,
        };

        fetch("./pessoa", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                "Content-Type": "application/json",
                Accept: "application/json",
            },
            body: JSON.stringify(pessoa),
        })
            .then((response) => response.json())
            .then((response) => {
                alert("Salvo com sucesso!");
                console.log(response);
                getAll();
                document.getElementById("close_modal").click();
            })
            .catch((err) => console.error(err));
    };

    const getAll = () => {
        fetch("./pessoa/getAll", {
            method: "GET",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                "Content-Type": "application/json",
                Accept: "application/json",
            },
        })
            .then((response) => response.json())
            .then((response) => renderTable(response))
            .catch((err) => console.error(err));
    };

    const exclude = (e) => {
        let id = e.target.dataset.pessoaid;
        if (confirm("Confirma exclusao?")) {
            fetch(`./pessoa/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    "Content-Type": "application/json",
                    Accept: "application/json",
                },
            })
                .then((response) => response.json())
                .then((response) => getAll())
                .catch((err) => console.error(err));
        }
    };

    const renderTable = (data) => {
        var tableBody = document.getElementById("lista_terceiros");
        tableBody.innerHTML = "";
        data.map((e) => {
            // Clear existing rows
            // Loop through the data and create table rows

            var row = document.createElement("tr");
            row.innerHTML = `
            <td>
                ${e.nome}
            </td>
            <td>${e.telefone}</td>
            <td>
                ${e.email}
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
                            id="excluir"
                            data-pessoaId="${e.id}"
                            ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                    </div>
                </div>
            </td>`;
            tableBody.appendChild(row);
        });
    };

    start();
})();
