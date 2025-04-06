const inputs = [
    document.getElementById("email"),
    document.getElementById("password"),
    document.getElementById("first"),
    document.getElementById("last"),
    document.getElementById("username")
];
const icon = document.querySelector(".icon");
    
inputs.forEach(input => {
    input.addEventListener("input", function () {
        if (this.value.trim() !== "") {
            this.style.color = "white";
        } else {
            this.style.color = "gray";
        }
    });
});

function password(){
    const pass = document.getElementById("password");
    if(pass.type==="password"){
        pass.type="text";
        icon.innerHTML="<img src='../assets/unlock.svg'>"
    }
    else{
        pass.type="password";
        icon.innerHTML="<img src='../assets/lock.svg'>"
    }
};