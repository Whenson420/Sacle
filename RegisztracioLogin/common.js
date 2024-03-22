const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
pwShowHide = document.querySelectorAll(".pw_hide");

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
    function changeTitleReg() {
        document.title = "Sacle - Regisztráció";
    }
    function changeTitleLog() {
        document.title = "Sacle - Bejelentkezés";
    }
});

pwShowHide.forEach((icon) => {
    icon.addEventListener("click", () => {
        let getPwInput = icon.parentElement.querySelector("input");
        if (getPwInput.type === "password") {
            getPwInput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
        } else {
            getPwInput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash");
        }
    });
});
document.getElementById("redirectButton").addEventListener("click", redirect);
function redirect(){ window.location.href = "../KezdoOldal/index.html"; }



function validateEmail(email) {
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(!emailRegex.test(email))
        alert("Helytelen az email!");
}
