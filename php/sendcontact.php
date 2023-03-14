<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contactus";

    //Create connection
    $conn = new mysqli($server, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $name = addslashes($name);
    $email = addslashes($email);
    $text = addslashes($text);

    $sqlquery = "INSERT INTO `contactdetails` (`name`, `email`, `text`) VALUES ('$name', '$email', '$text')" ;
    if($conn->query($sqlquery) == TRUE){
        header('Location: contactpage.html');
        die();
    } else {
        echo "Error: ". $sqlquery . "<br>" . $conn->error;
    }

    exit();
?>
