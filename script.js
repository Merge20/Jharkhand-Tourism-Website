const input = [
    document.getElementById("email"),
    document.getElementById("password"),
];

input.forEach(input=>{
    input.addEventListener("input", function(){
        if(this.value.trim() !== ""){
            this.style.color = "white";
        } else{
            this.style.color = "gray";
        }
    });
});


function password(){
    const icon = document.querySelector(".icon");
    const pass = document.getElementById("password");
    if(pass.type==="password"){
        pass.type="text";
        icon.innerHTML="<img src='./assets/unlock.svg'>"
    }
    else{
        pass.type="password";
        icon.innerHTML="<img src='./assets/lock.svg'>"
    }
};