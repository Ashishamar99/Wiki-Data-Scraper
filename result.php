<?php
    if (isset($_GET['msg'])) {
        # This code will run if ?msg is passed.
        $status = $_GET['msg'];
        if ($status == "Success")
        {
            echo '<a href="Scraped_Data.zip" download>Download this</a> <br /> <br />';
            echo '<a href=index.html>Scrape Another URL !</a>';
        }

        elseif ($status == "Error")
        {
            echo '<a href=index.html>Scrape Another URL !</a>';
        }
      }
    else
    {
        echo "Default Parameter";
        echo '<a href=index.html>Try Another URL !</a>';
    }
?>