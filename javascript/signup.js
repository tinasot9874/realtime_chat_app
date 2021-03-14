const form = document.querySelector(".signup form");
const errorText = form.querySelector(".error-txt");
const registerBtn = form.querySelector(".button button");

form.onsubmit = (e)=>{
    e.preventDefault(); // prevent form from submitting
}

registerBtn.onclick = ()=>{
 // handle with ajax
 let xhr = new XMLHttpRequest(); // creating XML object

 xhr.open("POST", "backend/signup.php", true);
 xhr.onload = ()=>{
     if(xhr.readyState === 4 && xhr.status === 200){ 
        let data = xhr.response;
        if (data == 'success') {
            location.href="user.php";
        }else{
            errorText.textContent = data;
            errorText.style.display = "block";
        }
     }
 }

 let formData = new FormData(form); // creating new formData Object
 xhr.send(formData); // sending the form data to signup.php
}