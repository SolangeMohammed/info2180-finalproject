
window.onload = function()
{
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
    let pri
    priority.addEventListener("change", function (e){
        // log(`e.target`, e.target);
        var sel= e.target;
        var val = sel.value;
        pri = sel.selectedOptions[0].text;
        
        console.log('option pri', pri);

    });

    let nameText
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
        var assigned = document.getElementById('issue').value;
        
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
}    



