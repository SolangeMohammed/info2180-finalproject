<?php
    header('Access-Control-Allow-Origin: *');
?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (!isset($_POST['name']) || !isset($_POST['idnumber']) ||
  empty($_POST['name']) || empty($_POST['idnumber'])) {
    echo "What?!?!? You don't have a name or ID Number?";
  } else {
    echo "Your name is: <strong>" . $_POST['name'] . "</strong> and your ID Number is: <strong>" . $_POST['idnumber'] . "</strong>.";
  }
}

?>

<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AJAX Examples</title>
    <link rel="stylesheet" href="styles.css" media="screen" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="demo.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Simple AJAX POST request using jQuery</h1>
      <p>Fill in your name in the field provided and click the Submit name button below.</p>
      <form action="" method="post">
        <div class="form-field">
          <label for="name">Your Name:</label>
          <input type="text" name="name" id="name" />
        </div>
        <div class="form-field">
          <label for="idnumber">ID Number:</label>
          <input type="text" name="idnumber" id="idnumber" />
        </div>
        <button type="button" id="nameSubmitBtn" class="btn">Submit Name</button>
      </form>
      <h2>Result</h2>
      <div id="result"></div>
    </div>
  </body>
</html> -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AJAX Examples</title>
    <link rel="stylesheet" href="styles.css" media="screen" />
    <script src="demo2.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Simple AJAX POST request using Plain JavaScript</h1>
      <p>Fill in your name in the field provided and click the Submit name button below.</p>
      <form action="" method="post">
        <div class="form-field">
          <label for="name">Your Name:</label>
          <input type="text" name="name" id="name" />
        </div>
        <div class="form-field">
          <label for="idnumber">ID Number:</label>
          <input type="text" name="idnumber" id="idnumber" />
        </div>
        <button type="button" id="nameSubmitBtn" class="btn">Submit Name</button>
      </form>
      <h2>Result</h2>
      <div id="result"></div>
    </div>
  </body>
</html>
