document.addEventListener("DOMContentLoaded", function() {
    const eyeIcon = document.getElementById("eyeicon");
    const passwordInput = document.getElementById("UPass");
    const loginButton = document.getElementById("loginbtn");

    eyeIcon.addEventListener("click", function() {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.src = "./asset/eye-opened.svg";
        } else {
            passwordInput.type = "password";
            eyeIcon.src = "./asset/eye-closed.svg";
        }
    });

    loginButton.addEventListener("click", (e) => {
        e.preventDefault();

        const email = document.getElementById("UEmail").value;
        const password = passwordInput.value;

        if (email && password) {
            console.log("Authentication successful");
        } else {
            alert("Please fill in all required fields.");
        }
    });
});