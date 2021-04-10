<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reviews";

    //Create connection
    $conn = new mysqli($server, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }

    $title = $_POST['title'];
    $text = $_POST['text'];
    $name = $_POST['name'];

    $sqlquery = "INSERT INTO `reviewdetails` (`title`, `text`, `name`) VALUES ('$title', '$text', '$name')" ;
    if($conn->query($sqlquery) == TRUE){
        header('Location: reviewpage.html');
        die();
    } else {
        echo "Error: ". $sqlquery . "<br>" . $conn->error;
    }

    exit();
?>