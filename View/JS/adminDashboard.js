/*****************Tab function*****************/
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  /*****************Change option desbloquear modal*****************/
  const desbloqueio = document.getElementById("desbloqueio");
  const submit = document.querySelector(".modal input[type=submit]");

  function changeOption(){
    let valor = desbloqueio.value;
    if(valor == 'bloquear')
      submit.value  = 'Bloquear';
    if(valor == 'desbloquear')
      submit.value = 'Desbloquear';  
  }