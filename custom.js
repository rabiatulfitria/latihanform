function validForm() {
    var first_name = document.formValid.first_name;
    var last_name = document.formValid.last_name;
    var email = document.formValid.email;
    var phone = document.formValid.phone;
    var address = document.formValid.address;

    if(first_name.value == ""){
        first_name.nextElementSibling.style.display = "block";
        first_name.style.border = "1px solid #f00";
        return false
    }else{
        first_name.nextElementSibling.style.display = "none";
        first_name.style.border = "1px solid transparent";
    }
    if(last_name.value == ""){
        last_name.nextElementSibling.style.display = "block";
        last_name.style.border = "1px solid #f00";
        return false
    }else{
        last_name.nextElementSibling.style.display = "none";
        last_name.style.border = "1px solid transparent";
    }
    if(email.value == ""){
        email.nextElementSibling.style.display = "block";
        email.style.border = "1px solid #f00";
        return false
    }else{
        email.nextElementSibling.style.display = "none";
        email.style.border = "1px solid transparent";
    }
    if(phone.value == ""){
        phone.nextElementSibling.style.display = "block";
        phone.style.border = "1px solid #f00";
        return false
    }else{
        phone.nextElementSibling.style.display = "none";
        phone.style.border = "1px solid transparent";
    }
    if(address.value == ""){
        address.nextElementSibling.style.display = "block";
        address.style.border = "1px solid #f00";
        return false
    }else{
        address.nextElementSibling.style.display = "none";
        address.style.border = "1px solid transparent";
    } 
}   