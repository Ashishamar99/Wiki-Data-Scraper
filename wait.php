<?php
    $url = $_POST['urlinput'];
    if ($url == "")
    {
        die("Please input a URL.");
    }
    else
    {
        if ($_GET['run']) {
            # This code will run if ?run=true is set.
            $myfile = fopen("urlinput.log", "w") or die("Unable to open file!");
            fwrite($myfile, $url);
            fclose($myfile);

            exec("scraperrun.sh", $o, $v);
        }
        echo "Scraping... <br /> <br />";
    }

    $statusfile = fopen("status.log", "r") or die("Unable to open status file!");
    $status = fread($statusfile, filesize("status.log"));
    fclose($statusfile);

    if ($status == "Success")
    {
        echo "$status";
        header("Location: http://localhost/Wiki%20Data%20scraper%20using%20AJAX/Wiki-Data-Scraper/result.php?msg=Success");
        die();
    }
    elseif ($status == "Error")
    {   
        echo $status;
        header("Location: http://localhost/Wiki%20Data%20scraper%20using%20AJAX/Wiki-Data-Scraper/result.php?msg=Error");
        die();
    }
    else
    {
        echo "Error Occurred";
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