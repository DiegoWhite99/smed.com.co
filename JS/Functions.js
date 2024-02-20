/* ---------------------------> apartado de resposive <----------------------- */

function MyMenuFuction(){
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += "resposive";
    } else {
        i.className = "nav-menu";
    }
}




var a = document.getElementById("loginbtn");
var b = document.getElementById("registerbtn");
var x = document.getElementById("login");
var y = document.getElementById("register");

/* ---------------------------> apartado de funciones <----------------------- */

function login() {
    x.style.left = "20px";
    y.style.right = "-520px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity  = 1;
    y.style.opacity  = 0;
}

function register(){
    x.style.left = "-510px";
    y.style.right = "5px";
    a.className = "btn";
    b.className += " white-btn";
    x.style.opacity  = 0;
    y.style.opacity  = 1;
}

