
function validateEmail(email){
    if (/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email.value)){
        email.classList.remove("border-danger");
        email.classList.add("border-success");
    }
    else{            
        email.classList.remove("border-success");
        email.classList.add("border-danger");

    }
}
function validatePassword(pass){
    if(pass.value.length >= 8){
        pass.classList.remove("border-danger");
        pass.classList.add("border-success");
    }
    else{            
        pass.classList.remove("border-success");
        pass.classList.add("border-danger");

    }
}