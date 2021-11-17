function block(that){
    const infoAluno = [];
    infoAluno.push(that.parentNode.children[0].innerHTML);
    infoAluno.push(that.parentNode.children[1].children[0].innerHTML);
    infoAluno.push(that.parentNode.children[1].children[1].innerHTML);
    sessionStorage.setItem("infoAluno", JSON.stringify(infoAluno));
    // console.log(that.parentNode.children[1].children[0].innerHTML);
    // console.log(infoAluno);
}

// console.log(Object.keys(sessionStorage));

