infoAluno = JSON.parse(sessionStorage.getItem("infoAluno"));
console.log(infoAluno);

const info = document.querySelector(".info");

info.innerHTML = `
<h2>${infoAluno[0]}</h2>
<h2>${infoAluno[1]}</h2>
<h2>${infoAluno[2]}</h2>
`
// window.onunload = function () {
// 	sessionStorage.removeItem('infoAluno');
// }

