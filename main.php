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

<body>
    <div>Check console for fetching database records.</div>
    <form method="POST" action="wait.php">
      Enter URL to scrape: <br /> <br />
      <input type="text" name="urlinput" /> <br /> <br />
      <input type="submit" value="Scrape" />
    </form>
    
    <!--     
    <div>Enter URL to scrape</div>
    <input type="text" id="urlinput" /> <br /> <br /> -->

    <!--<a href="wait.html"> <button id="submitbutton" onclick="sendurltoscrape()"/>Scrape</button> </a> -->
    <!-- JS Libs -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>