<html>
    <Head>
        <title>Wiki WebScraper</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                    <br><br><br><br><br>
                    <div class="content">
                    <center>
                    <?php
                        if (isset($_GET['msg'])) {
                            # This code will run if ?msg is passed.
                            $status = $_GET['msg'];
                            if ($status == "Success")
                            {
                                echo '<a href="Scraped_Data.zip" style="font-size: 20px;" download>Click To Download Scraped Data &#128515;</a> <br /> <br />';
                                echo '<a href=index.html style="font-size: 20px;">Scrape Another URL !</a>';
                            }

                            elseif ($status == "Error")
                            {
                                // Text Decoration.
                                // echo '<div class="badge badge-primary text-wrap" style="width: 10rem; font-size: 20px;">Sorry, Looks Like An Error Occurred &#128533;</div>';
                                echo '<div style="font-size: 20px;"> Sorry, Looks Like An Error Occurred &#128533;</div> <br /> <br />';
                                echo '<a href=index.html style="font-size: 20px;">Try Scraping Another URL !</a>';
                            }
                        }
                        else
                        {
                            echo '<div style="font-size: 20px;"> Default Parameter </div> <br /> <br />';
                            echo '<a href=index.html style="font-size: 20px;">Try Another URL !</a>';
                        }
                    ?>
                    </center>
                    </div>
                    <br><br><br><br><br><br><br><br>
                    <div id="foot1">
                        <center>
                            <h3>Made with &#128153 by CK & AK</h3>
                        </center>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="Images/EDA.gif">
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>