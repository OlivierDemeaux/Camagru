<?php

  include('database.php');

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="Camagru.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="header">
  <h1>Camagru</h1>
</div>

<div class="row">

<div class="col-3 col-s-3 menu">
  <ul>
    <?php include('./includes/head.php'); ?>
  </ul>
</div>

<div class="col-6 col-s-9">
  <?php include('./acceuil.php') ?>
</div>

<div class="col-3 col-s-12">
  <div class="aside">
    <h2>How does it works?</h2>
    <p>Just select a template to add to your picture</p>
    <h2>And then?</h2>
    <p>Just take the picture and wait for the result!</p>
    <h2>Wow, awesome!</h2>
    <p>Thanks!!</p>
  </div>
</div>

</div>
</br></br></br></br>


<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

<div class="example">Example DIV that dissapear when under 600px.</div>

</body>
</html>
