let popup = document.getElementById("cluediv");
let canvas = document.getElementById("mycanvas");
let ctx = canvas.getContext("2d");
let framenumber = 0;
const framewidth = canvas.width;
const framehight = canvas.height;
let x = 0;
let y = 0;
var mo  = false;
let cluepart = 0;
let sprite = new Image();
sprite.src = "../img/אייקונים/clue1.png";
let fixbugspeed = true;
sprite.onload = function(){
    if(fixbugspeed){
        fixbugspeed = false;
        setInterval(draw, 70);
    }
}

document.getElementById("mycanvas").addEventListener("mouseover", mouseOver);
document.getElementById("mycanvas").addEventListener("mouseout", mouseOut);
function mouseOver() {
    sprite.src = "../img/אייקונים/clue2.png";
    mo = true;
}
function mouseOut() {
    sprite.src = "../img/אייקונים/clue1.png";
    mo  = false;
}

function draw(){
    ctx.clearRect(0, 0, 200, 200);
    ctx.drawImage(sprite, x, y, framewidth, framehight, 0, 0, 200, 200);
    x = Math.min(framenumber, 35) % 6 * framewidth;
    y = Math.floor(Math.min(framenumber, 35) / 6) * framehight;
    ++framenumber;
    framenumber %= mo ? 30 : 100;
}
document.getElementById("cluediv").addEventListener("click", hideclue);

function showclue(more){
    popup.style.display = "block";
    if(more){
        canvas.style.zIndex = "4";
        canvas.style.transform = "translate(" + (44) + "vw," + (28) + "vw)";
        changimg();
    }
    else{
        canvas.style.display = "none";
    }
}
function hideclue(){
    popup.style.display = "none";
    canvas.style.transform = "translate(" + (0) + "vw," + (0) + "vw)";
    canvas.style.display = "block";
    cluepart = 0;
}
