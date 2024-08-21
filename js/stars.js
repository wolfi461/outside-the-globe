
function setStarRotate(event, rotate) {
    event.srcElement.src = `../../img/אייקונים/star${rotate ?  ' 2' : ''}.gif`;
    mo = rotate;
}

var cluepart = 0;

function showclue(event, ) {
    document.getElementById('cluediv').style.display = 'block';
    event.srcElement.style.display = 'none';
}
function hideclue(event) {
    if ((event.srcElement || event.target).id === 'cluediv') {
        document.getElementById('cluediv').style.display = 'none';
        document.getElementById('star').style.display = 'block';
    }
}

function hideclueMulti(event) {
    if ((event.srcElement || event.target).id === 'cluediv') {
        document.getElementById('cluediv').style.display = 'none';
        document.getElementById('star').style.display = 'block';
        document.getElementById('clueimg').src = imgarr[cluepart];
        document.getElementById('star2').style.display = 'block';
        document.getElementById('cluetxt').style.display = 'block';
        document.getElementById('cluetxt2').style.display = 'none';    
        cluepart = -1;
        changimg();
    }
}
function changimg() {
    ++cluepart;
    console.log(cluepart, imgarr[cluepart]);
    if (cluepart === 2) {
        document.getElementById('star2').style.display = 'none';
        document.getElementById('cluetxt').style.display = 'none';
        document.getElementById('cluetxt2').style.display = 'block';
    }
    document.getElementById('clueimg').src = imgarr[cluepart];
}