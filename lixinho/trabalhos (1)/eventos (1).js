const imgs = document.getElementById("img");
const img = document.querySelectorAll("#img img");

let idx = 0;

function carrossel(){
    idx++;

    if(idx > img.length -1){
        idx = 0;
    }

    imgs.style.transform = `ftranslateX(${-idx * 500}px)`;

}
setInterval(carrossel,900);
    
carrossel();