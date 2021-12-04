<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My AJAX Web Page</title>
    <link rel="stylesheet" href="styles.css" media="screen" />
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="no-refresh.js" charset="utf-8"></script>
  </head>
  <body>
    <div id="wrapper" class="container">
      <header>
        <h1>My Cool AJAX Page</h1>
        <p>
          Look ma! No page refreshes!
        </p>
      </header>
      <nav>
        <ul>
          <li><a id="nav-home" href="home.php">Home</a></li>
          <li><a id="nav-about" href="about.php">About</a></li>
          <li><a id="nav-contact" href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <main>
        <?php include 'home.php'; ?>
      </main>
      <footer>
        <p>Copyright &copy; 2016 Cool Web Dev</p>
      </footer>
    </div>
  </body>
</html>