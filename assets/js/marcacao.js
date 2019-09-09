function marcar(){
    document.querySelector(".area-imagem").addEventListener("click", evento);
}

var count = 0;
var marc = 0;
function evento(){
   count++;
   marc++;
   var pos = handler(event);
   var pixel = document.createElement("div");
   pixel.className = "pixel";
   pixel.id = "marc"+marc;
   pixel.style = "top: " + (pos.y - this.offsetTop) + "px; left: " + (pos.x - this.offsetLeft) + "px;";
   pixel.textContent = count;

   this.appendChild(pixel);
   
   var input = document.createElement("input");
   var textArea = document.createElement("textarea");
   input.name = "marcas[]";
   textArea.name = "descricoes[]";
   document.getElementById("marc"+marc).appendChild(input);
   document.getElementById("marc"+marc).appendChild(textArea);
   input.focus();
   
   var input_hidden = document.createElement("input");
   input_hidden.name = "coords[]";
   input_hidden.type = "hidden";
   input_hidden.value = (pos.x - this.offsetLeft)+"x"+ (pos.y - this.offsetTop);
   document.getElementById("marc"+marc).appendChild(input_hidden);
   
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