<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "events";
    $pw = $_POST['pw'];

    if($pw != "admpass123"){
        die("You are not the admin");
    } else {
        //Create connection
        $conn = new mysqli($server, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed" . $conn->connect_error);
        }

        $src = $_POST['src'];
        $alt = $_POST['alt'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $href = $_POST['href'];
        $src = addslashes($src);
        $alt = addslashes($alt);
        $title = addslashes($title);
        $text = addslashes($text);
        $href = addslashes($href);

        $sqlquery = "INSERT INTO `eventdetails` (`src`, `alt`, `title`, `text`, `href`) VALUES ('$src', '$alt', '$title', '$text', '$href')" ;
        if($conn->query($sqlquery) == TRUE){
            header('Location: eventspage.html');
            die();
        } else {
            echo "Error: ". $sqlquery . "<br>" . $conn->error;
        }
    }
    exit();
?>