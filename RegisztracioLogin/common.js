const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
pwShowHide = document.querySelectorAll(".pw_hide");

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

function changeTitleReg() {
    document.title = "Sacle - Regisztráció";
}
function changeTitleLog() {
    document.title = "Sacle - Bejelentkezés";
}

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
// Function to make the Axios POST request
function createUser(Uid, Mail) {
    // Define the URL with the placeholder for {WEAVY-SERVER}
    const url = "https://{WEAVY-SERVER}/api/users";

    // Set up the headers with the authorization token
    const headers = {
        "Authorization": "Bearer {API-KEY}",
        "Content-Type": "application/json"
    };

    // Construct the JSON payload
    const data = {
        uid: Uid,
        name: email.substring(0, email.indexOf("@")),
        email: Mail,
    };

    // Send a POST request with Axios
    axios.post(url, data, { headers })
        .then(response => {
            console.log("User created successfully");
        })
        .catch(error => {
            console.error("Error:", error.response.status);
        });
}