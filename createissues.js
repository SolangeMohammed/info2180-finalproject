window.onload = function()
{
    var submit = document.querySelector('#issue_submit');
    var httpRequest; 
    

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
        var url = "process.php";
        httpRequest.onreadystatechange = processName;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('title=' + encodeURIComponent(t) + "&description=" + encodeURIComponent(d));
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
            console.log("good too go ");
                
         }
        
    }
}


// function cleanInput(){
//     var cTitle = title.value; 
//     var cDescription = description.value; 
//     cTitle = cTitle.replace(/[^a-z0-9áéíóúñü \.,_-]/gim, "");
//     cleaninput = cTitle.trim();
//     cDescription = cDescription.replace(/[^a-z0-9áéíóúñü \.,_-]/gim, "");
//     cleaninput2 = cDescription.trim();

// }

// window.addEventListener("DOMContentLoaded",function()
// {
//     submitbtn();
//     checkEmptyfields();
//     // cleanInput(); 
    
// })



   