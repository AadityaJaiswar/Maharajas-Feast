<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "maharajas-feast";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $person = $_POST['person'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    $sql_query = "INSERT INTO reservation (name, phone, person, date, time, message)
    VALUES ('$name', '$phone', '$person', '$date', '$time', '$message')";


    if (mysqli_query($conn, $sql_query)) {
         header('Location: popup.html');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>