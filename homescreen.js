window.onload = function() {
    var all = document.getElementById("all_id");
    var open = document.getElementById("open_id");
    var myticket = document.getElementById("my-ticket_id");
    var request = new XMLHttpRequest();

    //insert links below
    request.open("GET","",true);
    request.send();
    request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200){
                console.log('This is working'); 
                document.getElementById("table").innerHTML = this.responseText;
            

        }
    }

    all.addEventListener("click", function (x) { x.preventDefault();
        request.open("GET","",true);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200){
                document.getElementById("table").innerHTML = this.responseText;
            } 
        }

    });

    open.addEventListener("click", function (x) {x.preventDefault();
        request.open("GET","",true);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200){
                document.getElementById("table").innerHTML = this.responseText;
            }
        }

    });

    myticket.addEventListener("click", function (x) {x.preventDefault();
        request.open("GET","",true);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200){
                document.getElementById("table").innerHTML = this.responseText;
            }
        }

    });

}