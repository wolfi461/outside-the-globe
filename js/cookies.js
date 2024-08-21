function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return 0;
}
function setCookie(cname, cvalue) {
    document.cookie = cname + "=" + cvalue;
    window.top.postMessage('cookie' + cvalue, '*');
}
function openCode() {
    document.getElementById('openCode').style.display = 'block';
    document.getElementById('pass').style.display = 'none';
}