let eyeicon = document.getElementById("eyeicon");
let password = document.getElementById("UPass");

eyeicon.onclick = function (){
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src = "./images/eye-opened.svg"
    }else{
        password.type = "password";
        eyeicon.src = "./images/eye-closed.svg"
    }
}


document.addEventListener("DOMContentLoaded", function() {
    const registerButton = document.getElementById("registerbtn");

    registerButton.addEventListener("click", (e) => {
        e.preventDefault();

        const name = document.getElementById("UName").value;
        const email = document.getElementById("UEmail").value;
        const address = document.getElementById("UAddress").value;
        const phone = document.getElementById("UPhone").value;
        const birth = document.getElementById("UBirth").value;
        const password = document.getElementById("UPass").value;

        if (name && email && address && phone && birth && password) {
            window.location.href = "index_homepage.html";
        } else {
            alert("Please fill in all required fields.");
        }
    });
});
