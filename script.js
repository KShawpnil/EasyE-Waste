let i = 0;
let placeholder = "";
const email = "example@gmail.com";
const speed = 120;


function type(){
    placeholder += email.charAt(i);
    document.getElementById("Email").setAttribute("placeholder",placeholder);
    i++;;
    setTimeout(type,speed);
}

type();