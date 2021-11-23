

function yesnoCheck(that,ingredientes,fornecedor) {
    let choice =document.getElementById("choice");
    if (that.value == "Comida") {
        choice.innerHTML = `<label  for="ingredientes">Ingredientes</label>
                        <input type="text" id="ingredientes" name="ingredientes" value="${ingredientes}">`;
    } else {
        choice.innerHTML = `<label id="label-fornecedor" for="fornecedor">Fornecedor</label>
        <input type="text" id="fornecedor" name="fornecedor" value="${fornecedor}">`;
    }
}


