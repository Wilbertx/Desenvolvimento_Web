//const form = document.getElementById("formCadastro");
//console.log.apply(form);

const initForm = (qualForm) => {
    const formRequerido = document.getElementById(qualForm);
    const inputs = formRequerido.querySelectorAll("input");

    // perguntamos se existe algum resultado
    if (inputs.length > 0) {
        // se existir, percorremos o array de inputs    
        inputs.forEach((input) => {
            // exibir no console o valor de cada input
            console.log(input.value);
        });
    }
}

export default form;