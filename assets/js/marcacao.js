function marcar(){
    document.querySelector(".area-imagem").addEventListener("click", evento);
}

function evento(){
   var pos = handler(event);
   var pixel = "<div class=\"pixel\" style=\"top: " + (pos.y - this.offsetTop) + "px; left: " + (pos.x - this.offsetLeft) + "px;\"></div>";
   var input = `
   <form>
    <input type="text">
   </form>
   `
   this.innerHTML = this.innerHTML + pixel + input;
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