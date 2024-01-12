let main = () => {
    function start() {
        registerElements();
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
        form.nome = document.getElementById("nome");
        form.telefone = document.getElementById("telefone");
        form.email = document.getElementById("email");
        form.data_nascimento = document.getElementById("data_nascimento");
        form.cpf = document.getElementById("cpf");
        form.rg = document.getElementById("rg");
        form.rg_orgao_emissor = document.getElementById("rg_orgao_emissor");
        form.data_abertura = document.getElementById("data_abertura");
        form.cnpj = document.getElementById("cnpj");
        form.insc_municipal = document.getElementById("insc_municipal");
        form.insc_estadual = document.getElementById("insc_estadual");
        form.tipo_pessoa = document.getElementById("tipo_pessoa");
    }

    function registerEvents() {
        registrarListener("teste", "click", handleForm);
    }

    const registrarListener = (elementId,eventType,callBack)=>{
        document.getElementById(`${elementId}`).addEventListener(`${eventType}`, callBack);
    };

    const store = () => {};

    start();
};
