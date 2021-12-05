window.onload = function(){
    let fname = document.getElementById("fname")
    let lname = document.getElementById("lname")
    let email = document.getElementById("email")
    let submitform = document.getElementById("submitform")
    let password =document.getElementById("password")
    let results =document.getElementById("results")
    var pwvalidate = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/
    //let formelements = document.getElementById("new-user").elements
    //const postRequest= new XMLHttpRequest();
    submitform.addEventListener('click', function(e){
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
        if(!pwvalidate.test(password.value)){
            password.style.borderColor="red";
            alert("Passowrd must have one");
            return false;
        }
        
        
       var insertrequest = new XMLHttpRequest();
       var url = "http://localhost/info2180-finalproject/adduser.php?firstname=" + fname.value + "&lastname=" + lname.value + "&email=" +  email.value + "&password=" +  password.value;
       insertrequest.onreadystatechange = function(){
           if(insertrequest.readyState == XMLHttpRequest.DONE){
            if(insertrequest.status == 200){
                var result = insertrequest.responseText
                 results.innerHTML=result
            }
            else{
                alert("Cant add user")
            }
               
           }
       }
       insertrequest.open("GET",url,true);
       insertrequest.send();
    });

    var submit = document.querySelector('#issue_submit');
    var httpRequest; 
    var assigned = document.querySelector('[id="assigned"]');
    var priority = document.querySelector('[id="priority"]');
    let desc; 
    var type = document.querySelector('[id="type"]'); 
        type.addEventListener("change", function (e){
            var select = e.target;
            var value = select.value;
            desc = select.selectedOptions[0].text;
            console.log('option des', desc);
    
        });
    let pri;
    priority.addEventListener("change", function (e){
        // log(`e.target`, e.target);
        var sel= e.target;
        var val = sel.value;
        pri = sel.selectedOptions[0].text;
        
        console.log('option pri', pri);

    });

    let nameText;
    assigned.addEventListener("change", function (e){
        // log(`e.target`, e.target);
        var nam= e.target;
        var val = nam.value;
        nameText = nam.selectedOptions[0].text;
        
        console.log('option text', nameText);

    });
    

    submit.addEventListener('click', function(element)
    {
        element.preventDefault();
        console.log("button clicked");
        checkEmptyfields();  
        httpRequest = new XMLHttpRequest(); 
        var title = document.getElementById('title');
        var t = title.value;
        var description = document.getElementById('description');
        var d = description.value; 
        console.log('pop', desc); 
        var url = "process.php";
        httpRequest.onreadystatechange = processName;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('title=' + encodeURIComponent(t) + '&description=' + encodeURIComponent(d) + '&type=' + encodeURIComponent(desc) + "&priority=" + encodeURIComponent(pri)+ "&assigned=" + encodeURIComponent(nameText));
    });
    
    function processName() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
          if (httpRequest.status === 200) {
            var response = httpRequest.responseText;
            var result = document.querySelector('#result');
            result.innerHTML = response;
          } else {
            alert('There was a problem with the request.');
          }
        }
    }
   
    


    function checkEmptyfields()
    {

        if(title.value == ""  || title.value== null)
        {
            title.style.background="red"; 
            alert("Please enter an Issue title");
            return false; 
                
        }
        else if (description.value== ""  || description.value== null)
        {
            description.style.background="red";
            alert("Please enter a description");
            return false;
        }
        else
        {
            console.log(description.value);
            console.log(title.value);
            console.log(type);
            console.log(priority); 
            console.log("good too go ");
                
         }
        
    }

    var link = document.getElementById('click'); 
    var linkId = document.getElementById('issueID'); 
    console.log(link.innerHTML); 
    
     
    
        var httpRequest = new XMLHttpRequest(); 
        for(var i = 0; i < link.length; i++){
            //console.log(linkId.value); 
            link[i].addEventListener("click", function(element)
            {
                element.preventDefault(); 
                console.log("issue clicked"); 
                httpRequest.onreadystatechange= function()
                {
                    if(httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200){
                        var response =  httpRequest.responseText; 
                        console.log("provided response");
                        console.log(linkId[i].value)


                        
                    }
                }
                httpRequest.open("GET", "http://localhost/info2180-finalproject/jobdetails.php?iden="+linkId[i].value); 
                httpRequest.send();  



            })
        }
    
}