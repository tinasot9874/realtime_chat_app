const pswrdField = document.querySelector(".form .field input[type='password']");
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
    if(pswrdField.type == "password"){
        pswrdField.type = "text";
        toggleBtn.classList.toggle("active");
    }else{
        pswrdField.type = "password";
        toggleBtn.classList.toggle("active");
        //toggleBtn.classList.remove("active");
    }
}






















