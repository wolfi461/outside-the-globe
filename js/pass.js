function keyboardResponse(event, back, password, lockNum) {
    if (event.keyCode === 27) window.location.href = back;
    else if (event.keyCode === 13) {
        var inp = document.getElementById('pass');
        var txt = inp.value.toLowerCase();
        if (txt === password) {
            window.top.postMessage('tl' + password, '*');
            setCookie("solved", Math.max(lockNum, getCookie("solved")));
            var openCode = document.getElementById('openCode');
            if (openCode){
                openCode.style.display = 'block';
                inp.style.display = 'none';
                var nextRoom = document.getElementById('arroNextRoom');
            if (nextRoom) nextRoom.style.display = 'block';
            }
            else{
                window.location.href=back;
            }
        }
        else if(txt != ''){
            window.top.postMessage('code' + password + '$' + txt, '*');
            inp.value = "";
            
        }
    }
}
function inputOnInput(input, type) {
    const prev = input.value;
    if(type === 0){     //אנגלית
        input.value = input.value.replace(/[^a-zA-Z]/g,'');
    }
    else if(type === 1){    //עברית
        input.value = input.value.replace(/[^א-ת]/g,'');
    }
    else{   //מספרים
        input.value = input.value.replace(/[^0-9]/g,'');
    }
    
    if (prev !== input.value)
        window.top.postMessage('msg' + (type + 3), '*');
}