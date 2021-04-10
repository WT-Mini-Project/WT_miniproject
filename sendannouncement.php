<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "announcements";
    $pw = $_POST['pw'];

    if($pw != "admpass123"){
        die("You are not the admin");
    } else {
        //Create connection
        $conn = new mysqli($server, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed" . $conn->connect_error);
        }

        $title = $_POST['title'];
        $text = $_POST['text'];
        $sources = $_POST['sources'];

        $sqlquery = "INSERT INTO `newann` (`title`, `text`, `sources`) VALUES ('$title', '$text', '$sources')" ;
        if($conn->query($sqlquery) == TRUE){
            header('Location: announcementspage.html');
            die();
        } else {
            echo "Error: ". $sqlquery . "<br>" . $conn->error;
        }
    }
    exit();
?>