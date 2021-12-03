$(document).ready(function() {
    var nameSubmitBtn = $('#nameSubmitBtn');
  
    nameSubmitBtn.on('click', function(element) {
      element.preventDefault();
      var yourname = $('#name').val();
      var yourIdNumber = $('#idnumber').val();
  
      $.ajax('process.php', {
        method: 'POST',
        data: {
          name: yourname,
          idnumber: yourIdNumber
        }
      }).done(function(response) {
        var resp = response;
        $('#result').html(resp);
      }).fail(function() {
        alert('There was a problem with the request.');
      });

    })
});

