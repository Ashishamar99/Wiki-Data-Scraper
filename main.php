<?php

if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("querydb.sh");
}
?>

<html>
    <Head>
        <title>Wiki WebScraper</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="Images/window scraper.jpg" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
        <link rel="stylesheet" href="CSS/index.css">
    </Head>
    <body>
        <div class="jumbotron">
            <center>
                <h1>Web Technologies laboratory Mini Project</h1>
            </center>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img src="Images/logo.png" id="logoimg">
                    <br><br>
                    <p>
                    Hey Users!!!,<br>
                    Want some data set from Wikipedia??<br>
                    You've come to right place &#127881&#127881&#127882 <br>
                    Be Amazed &#128562<br></p>
                    <br>
                    <form method="POST" action="wait.php?run=true">
                        <input id="inp1" type="text" placeholder="    Enter the URL " name="urlinput"/>
                    <input id="click1" type="submit" value="Scrape" /><<br><br><br><br><br>
                    </form>
                    <div id="foot1">
                        <center>
                            <h3>Made with &#128153 by CK & AK</h3>
                        </center>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="Images/Python-Web-Scraping.gif">
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="JS/main.js"></script>
    </body>
</html>