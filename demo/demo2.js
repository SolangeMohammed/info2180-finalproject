window.onload = function() {

    var nameSubmitBtn = document.querySelector('#nameSubmitBtn');
    var httpRequest;
  
    nameSubmitBtn.addEventListener('click', function(element) {
      element.preventDefault();
  
      httpRequest = new XMLHttpRequest();
      var name = document.querySelector('#name').value;
      var idnumber = document.querySelector('#idnumber').value;
  
      // GET Request
      var url = "process.php";
      httpRequest.onreadystatechange = processName;
      httpRequest.open('POST', url);
      // Notice for the POST request we are setting the Content-Type
      httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      // Notice for the POST request we are passing in our name parameter as part
      // of the send method. Also ensure you encode any special characters using
      // encodeURIComponent()
      httpRequest.send('name=' + encodeURIComponent(name) + "&idnumber=" + encodeURIComponent(idnumber));
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
  
  };