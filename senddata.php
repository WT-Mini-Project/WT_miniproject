<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newnotes";
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

        $sqlquery = "INSERT INTO `newnotesdetails` (`src`, `alt`, `title`, `text`, `href`) VALUES ('$src', '$alt', '$title', '$text', '$href')" ;
        if($conn->query($sqlquery) == TRUE){
            header('Location: notespage.html');
            die();
        } else {
            echo "Error: ". $sqlquery . "<br>" . $conn->error;
        }
    }
    exit();
?>