function start() {
    getAll();
    registerElements();
    registerEvents();
}

let form = {
    nome: "",
    min: "",
    max: "",
};

function registerElements() {
    form.nome = document.getElementById("nome");
    form.minimo = document.getElementById("minimo");
    form.maximo = document.getElementById("maximo");
    form.id = document.getElementById("id");
}

function registerEvents() {

    // registrarListener("tipo_pessoa", "change", handleTipoPessoa);
    registrarListener("salvar", "click", store);
    // registrarListener("excluir", "click", exclude);
}

const registrarListener = (elementId, eventType, callBack) => {
    document
        .getElementById(`${elementId}`)
        .addEventListener(`${eventType}`, callBack);
};

const store = () => {
    const marcador = {
        nome: form.nome.value,
        minimo: form.minimo.value,
        maximo: form.maximo.value,
        id: form.id.value
    };

    fetch("../cadastro/marcadores", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            "Content-Type": "application/json",
            Accept: "application/json",
        },
        body: JSON.stringify(marcador),
    })
        .then((response) => response.json())
        .then((response) => {
            alert("Salvo com sucesso!");
            console.log(response);
            getAll();
            document.getElementById("close_modal").click();
            clearForm();
        })
        .catch((err) => console.error(err));
};

const getAll = () => {
    fetch("./marcadores/getAll", {
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

const exclude = (id) => {

    // let id = e.target.dataset.pessoaid;
    if (confirm("Confirma exclusao?")) {
        fetch(`./marcadores/${id}`, {
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

const edit=(id)=>{
    fetch(`./marcadores/${id}`, {
        method: "GET",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                "content"
            ),
            "Content-Type": "application/json",
            Accept: "application/json",
        },
    })
        .then((response) => response.json())
        .then((response) => {
            document.getElementById('openModal').click();
            form.nome.value=response.nome,
            form.minimo.value=response.minimo,
            form.maximo.value =response.maximo
            form.masculino.value =response.masculino
            form.feminino.value =response.feminino
            form.id.value =response.id
        })
        .catch((err) => console.error(err));

}

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
            <td>${e.minimo}</td>
            <td>
                ${e.maximo}
            </td>
            <td>
                ${e.masculino}
            </td>
            <td>
                ${e.feminino}
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
                            onclick="edit(${e.id})"
                            ><i class="bx bx-edit-alt me-1"></i> Edit</a
                        >
                        <a
                            class="dropdown-item"
                            href="javascript:void(0);"
                            id="excluir"
                            data-pessoaId="${e.id}"
                            onclick="exclude(${e.id})"
                            ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                    </div>
                </div>
            </td>`;
        tableBody.appendChild(row);
    });
};

const clearForm=()=>{
    form.nome.value="",
    form.minimo.value="",
    form.maximo.value =""
    form.masculino.value ="",
    form.feminino.value =""

    form.id.value =""
}

document.addEventListener("DOMContentLoaded", function () {
    start();
});
