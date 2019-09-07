function marcar(){
    document.querySelector(".area-imagem").addEventListener("click", evento);
}

var count = 0;
var marc = 0;
function evento(){
    count++;
    marc++;
    var pos = handler(event);
    var pixel = "<div class=\"pixel\" id=\"marc"+marc+"\" name=\"marc"+marc+"\" style=\"top: " + (pos.y - this.offsetTop) + "px; left: " + (pos.x - this.offsetLeft) + "px;\">" + count + "</div>";

    this.innerHTML = this.innerHTML + pixel;
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

function desmarcar(){
    
}