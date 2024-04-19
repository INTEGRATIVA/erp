
const registrarListener = (elementId, eventType, callBack) => {
    document
    .getElementById(`${elementId}`)
    .addEventListener(`${eventType}`, callBack);
};


const loadMarcadores = () => {
    fetch("../cadastro/marcadores/getAll", {
        method: "GET",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            "Content-Type": "application/json",
            Accept: "application/json",
        },
    })
        .then((response) => response.json())
        .then((response) => renderSelect(response))
        .catch((err) => console.error(err));
};

const renderSelect = (dataSource)=>{
    const selectElement = document.getElementById('marcador');

    // Step 3: Loop through the data source.
    dataSource.forEach(item => {
    const option = document.createElement('option');

    // Step 4: Set the value and text content of the option.
    option.value = item.id;
    option.textContent = `${item.nome} (${item.genero=='m'?"Masculino":"Feminino"})`;
    option.dataset.minimo = item.minimo
    option.dataset.maximo = item.maximo
    option.dataset.genero = item.genero

    // Step 5: Append the option to the select element.
    selectElement.appendChild(option);
});
}

const handleMarcador = () => {


    var e = document.getElementById("marcador");
    var minimo = Number(e.options[e.selectedIndex].dataset.minimo)
    var maximo = Number(e.options[e.selectedIndex].dataset.maximo)
    var genero = Number(e.options[e.selectedIndex].dataset.genero)

    validarMarcadorSelecionado(minimo, maximo)


}

const validarMarcadorSelecionado = (min, max)=>{
    let textoValidacao = document.getElementById('textoValidacao');
    let valor = Number(document.getElementById('valor').value);
    if (valor == '') {
        textoValidacao.textContent= '';
        return 1
    };

    if (max>=valor) {
        if (valor>=min) {
            textoValidacao.textContent= 'Dentro do esperado';
            textoValidacao.style.color='green';
        }else{
            textoValidacao.style.color='red';
            textoValidacao.textContent= 'Fora do esperado';
        }
    }else{
        textoValidacao.style.color='red';
        textoValidacao.textContent= 'Fora do esperado';
    }
}

registrarListener('marcador', 'change', handleMarcador);
registrarListener('valor', 'change', handleMarcador);
loadMarcadores()
