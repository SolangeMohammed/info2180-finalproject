window.onload = function(){
    let fname = document.getElementById("fname")
    let lname = document.getElementById("lname")
    let email = document.getElementById("email")
    let submit = document.getElementById("submit")
    let password =document.getElementById("password")
    var pwvalidate = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

    submit.addEventListener('click', function(e){
        e.preventDefault();
         //ensuring no field is left empty
        console.log("js working")
        if(fname.value == ""){
            fname.style.borderColor="red";
            alert("Please enter Fisrt name");
            return false;
        }
        else if(lname.value == ""){
            lname.style.borderColor="red";
            alert("Please enter Last name");
            return false;
        }
        else if(email.value == ""){
            email.style.borderColor="red";
            alert("Please enter your email");
            return false;
        }
        else if(password.value == ""){
            password.style.borderColor="red";
            alert("Please enter password");
            return false;
        }

        //ensuring password meets requirements
        if(!password.value.match(pwvalidate)){
            password.style.borderColor="red";
            alert("Password must contain a Capital Letter and a number");
            return false;
        }
    });
}