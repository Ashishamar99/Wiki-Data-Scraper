<?php
    $url = $_POST['urlinput'];
    if ($url == "")
    {
        die("Please input a URL.");
    }
    else
    {
        $myfile = fopen("urlinput.txt", "w") or die("Unable to open file!");;
        fwrite($myfile, $url);
        fclose($myfile);

        echo "Scraping... <br /> <br />";
    }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/window scraper.jpg" >
    <title>Wait Page</title>
</head>
</html>