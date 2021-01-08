<?php

if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("querydb.sh");
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/window scraper.jpg" >
    <title>Wiki Data Scraper</title>
</head>
<style>
  #fetch-db-btn{
    color: red;
  }
</style>
<body>
    <button id="fetch-db-btn" href="?run=true">Fetch DB Records.</button>
    <!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
    <!-- JS Libs -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>