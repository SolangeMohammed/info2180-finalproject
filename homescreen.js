/*window.onload= function(){
    var link = document.getElementById('click'); 
    var linkId = document.getElementById('issueID'); 
    clickable(); 
    function clickable()
    {
        var httpRequest = new XMLHttpRequest(); 
        for(var i = 0; i < link.length; i++){
            console.log(linkId.value); 
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




}*/



// window.onload = function() {
//     var all = document.getElementById("all_id");
//     var open = document.getElementById("open_id");
//     var myticket = document.getElementById("my-ticket_id");
//     var request = new XMLHttpRequest();

//     //insert links below
//     request.open("GET","",true);
//     request.send();
//     request.onreadystatechange = function() {
//             if (request.readyState == 4 && request.status == 200){
//                 console.log('This is working'); 
//                 document.getElementById("table").innerHTML = this.responseText;
            

//         }
//     }

//     all.addEventListener("click", function (x) { x.preventDefault();
//         request.open("GET","",true);
//         request.send();
//         request.onreadystatechange = function() {
//             if (request.readyState == 4 && request.status == 200){
//                 document.getElementById("table").innerHTML = this.responseText;
//             } 
//         }

//     });

//     open.addEventListener("click", function (x) {x.preventDefault();
//         request.open("GET","",true);
//         request.send();
//         request.onreadystatechange = function() {
//             if (request.readyState == 4 && request.status == 200){
//                 document.getElementById("table").innerHTML = this.responseText;
//             }
//         }

//     });

//     myticket.addEventListener("click", function (x) {x.preventDefault();
//         request.open("GET","",true);
//         request.send();
//         request.onreadystatechange = function() {
//             if (request.readyState == 4 && request.status == 200){
//                 document.getElementById("table").innerHTML = this.responseText;
//             }
//         }

//     });

// }