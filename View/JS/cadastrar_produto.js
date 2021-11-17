

function yesnoCheck(that) {
    let choice =document.getElementById("choice");
    if (that.value == "Comida") {
        choice.innerHTML = `<label id="label-ingredientes" for="ingredientes">Ingredientes</label>
        <input type="text" id="ingredientes" name="ingredientes"></input>`;
    } else {
        choice.innerHTML = `<label id="label-fornecedor" for="fornecedor">Fornecedor</label>
        <input type="text" id="fornecedor" name="fornecedor">`;
    }
}
