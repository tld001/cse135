<!doctype html>
<html lang="en">

<?php
  if ($_SERVER['REQUEST_METHOD'] === 'GET')
  {
      $first_name = $_GET[firstName];
      $last_name = $_GET[lastName];
      $background_color = $_GET[favColor];
  }
  elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
  {
      $first_name = $_POST[firstName];
      $last_name = $_POST[lastName];
      $background_color = $_POST[favColor];
  }

?>


<head>
  <meta charset="utf-8">
  <title>James Dang</title>
  <link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" type="text/css" href=style.css>
</head>


<body style ="background: <?php echo $background_color; ?>;" >
  <nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="README.html">README</a></li>
        
        <li><a href="php_hello.php">PHP Hello</a></li>
        <li><a href="php_environment.php">PHP Environment</a></li>
        <li><a href="php_form.php">PHP Form</a></li>
        <li><a href="sessionpage1.php">PHP Session 1</a></li>
        <li><a href="sessionpage2.php">PHP Session 2 </a></li>

        <li><a href="cgi-bin/hello.cgi">CGI Hello</a></li>
        <li><a href="cgi-bin/environment.cgi">CGI Environment</a></li>
        <li><a href="cgi-bin/form.cgi">CGI Form</a></li>
        <li><a href="cgi-bin/session.cgi">CGI Session 2</a></li>
    <ul>
  <nav>

  <section>
  <?php
    date_default_timezone_set('America/Los_Angeles');

    echo "Hello $first_name $last_name from a Web app writen in PHP on ";
    echo date("m/d/Y h:i a");
  ?>
  <section>

</body>
</html>