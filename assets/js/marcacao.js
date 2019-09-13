function marcar(){
    document.querySelector(".area-imagem").addEventListener("click", evento);

    document.getElementById("marcar").style.display = "none";
}

var marc = 0;
function evento(){
   marc++;
   var pos = handler(event);
   var pixel = document.createElement("div");
   pixel.className = "pixel form-group";
   pixel.id = "marc"+marc;
   pixel.style = "top: " + (pos.y - this.offsetTop) + "px; left: " + (pos.x - this.offsetLeft) + "px;";
   pixel.textContent = 'Marcação:';

   this.appendChild(pixel);
   
   var input = document.createElement("input");
   var textArea = document.createElement("textarea");
   input.name = "marcacao";
   textArea.name = "descricao";
   document.getElementById("marc"+marc).appendChild(input);
   document.getElementById("marc"+marc).appendChild(textArea);
   input.focus();
   
   var input_hidden_x = document.createElement("input");
   input_hidden_x.name = "coordX";
   input_hidden_x.type = "hidden";
   input_hidden_x.value = (pos.x - this.offsetLeft);
   document.getElementById("marc"+marc).appendChild(input_hidden_x);

   var input_hidden_y = document.createElement("input");
   input_hidden_y.name = "coordY";
   input_hidden_y.type = "hidden";
   input_hidden_y.value = (pos.y - this.offsetTop);
   document.getElementById("marc"+marc).appendChild(input_hidden_y);

    var botao = document.querySelector("form input[type='submit']");
    botao.style.display = input ? "inline" : "none";
   
   this.removeEventListener('click', evento); // remove o event listener
}

function handler(e) {
    e = e || window.event;

    var pageX = e.pageX;
    var pageY = e.pageY;

    // IE 8
    if (pageX === undefined) {
        pageX = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
        pageY = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
    }

   return {x: pageX, y: pageY};
}